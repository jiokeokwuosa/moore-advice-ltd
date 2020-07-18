<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\State;
use App\Application;

class UsersController extends Controller
{
    /**
     *Logins user
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {     
        $this->validate($request,[
            'passcode'=> 'required|unique:users'           
        ]);  

        try{ 
            $user = new User;
            $user->passcode = $request->passcode;
            $user->save();
            
            return redirect('/apply')->with('passcode', $request->passcode);
                    
        }catch (\Exception $e){
            return  response()->json(['error'=>$e->getMessage()], 500);
        }          
       
    }

    /**
     * Display Application page.
     */
    public function getApplicationForm()
    {
        $state= State::all();
        return view('apply')->with('state', $state);
    }    
    
    /**
     *Make Application
     *
     * @return \Illuminate\Http\Response
     */
    public function submitApplication(Request $request)
    {         
        $this->validate($request,[
            'firstName'=> 'required', 
            'lastName'=> 'required',
            'address'=> 'required',
            'maritalStatus'=> 'required',
            'education'=> 'required',          
            'subjects'=> 'required',
            'religion'=> 'required',
            'state'=> 'required',
            'dateOfBirth'=> 'required',
            'upload'=> 'required',
            'passcode'=> 'required'
        ]);  
         
        try{ 
           
            $file= $request->upload;
            $destinationPath = public_path()."/assets/img";
            $originalFile = $file->getClientOriginalName()
            ;
            $filename= time().'_'.$originalFile;
            $result=$file->move($destinationPath, $filename);

            $newSubjects = implode(" ",$request->subjects);

            $application = new Application;
            $application->passcode = $request->passcode;
            $application->firstName = $request->firstName; 
            $application->lastName = $request->lastName; 
            $application->address = $request->address; 
            $application->maritalStatus = $request->maritalStatus; 
            $application->education = $request->education;          
            $application->subjects = $newSubjects;
            $application->religion = $request->religion; 
            $application->state  =$request->state; 
            $application->dateOfBirth = $request->dateOfBirth ; 
            $application->upload = $filename;
            $application->save(); 
            
            return redirect('/confirm')->with('passcode', $request->passcode)->with('firstName', $request->firstName)->with('lastName', $request->lastName);

        }catch (\Exception $e){
            return  response()->json(['error'=>$e->getMessage()], 500);
        }          
       
    }

    /**
     * Display Confirmation page.
     */
    public function getConfirmationForm()
    {
        return view('confirm');
    }

    /**
     *Process Application
     *
     * @return \Illuminate\Http\Response
     */
    public function  processApplication(Request $request)
    {     
        $this->validate($request,[            
            'passcode'=> 'required'
        ]);  
       
        try{
            $application = Application::where('passcode', $request->passcode)->first();

            if($request->submit == 'Application Status'){
                return view('status')->with('user', $application);              
            }else{
                return view('details')->with('user', $application);              
            } 
        }catch (\Exception $e){
            return  response()->json(['error'=>$e->getMessage()], 500);
        }          
       
    }
   
    /**
     * Display recovery page.
     */
    public function recoverApplication()
    {
        return view('recover');
    }

     /**
     * Application Recovery
     *
     * @return \Illuminate\Http\Response
     */
    public function applicationRecovery(Request $request)
    {     
        $this->validate($request,[            
            'passcode'=> 'required'
        ]);  
        
        try{  
            $application = Application::where('passcode', $request->passcode)->first();
            if(!$application)  return redirect('/recover')->with('error', 'No Record Found');         
            return redirect('/confirm')->with('passcode', $request->passcode)->with('firstName', $application->firstName)->with('lastName', $application->lastName);

        }catch (\Exception $e){
            return  response()->json(['error'=>$e->getMessage()], 500);
        }          
       
    }
    
}
