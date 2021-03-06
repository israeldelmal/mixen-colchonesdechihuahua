<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class WebController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function contact(Request $request)
    {
    	if ($request->ajax()) {
    		$rules = [
				'name'     => 'required|min:2',
				'mattress' => 'required|min:2',
				'email'    => 'email|required',
				'tel'      => 'required|min:2',
				'message'  => 'required|min:2'
            ];

            $messages = [
				'name.required'     => ' Este campo es necesario',
				'name.min'          => ' Mínimo 2 caracteres',
				
				'mattress.required' => ' Este campo es necesario',
				'mattress.min'      => ' Mínimo 2 caracteres',
				
				'email.required'    => ' Este campo es necesario',
				'email.email'       => ' No tiene formato de email',
				
				'tel.required'      => ' Este campo es necesario',
				'tel.min'           => ' Mínimo 2 caracteres',
				
				'message.required'  => ' Este campo es necesario',
				'message.min'       => ' Mínimo 2 caracteres'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return response()->json([
                    'fail'   => true,
                    'errors' => $validator->getMessageBag()->toArray()
                ]);
            } elseif ($validator->passes()) {                
     //            $data = [
					// 'name'     => $request->name,
					// 'mattress' => $request->mattress,
					// 'email'    => $request->email,
					// 'tel'      => $request->tel,
					// 'content'  => $request->message
     //            ];

     //            Mail::send('emails.contact', $data, function($message) use ($data) {
     //                $message->to('1santarosa@prodigy.net.mx', 'Colchones de Chihuahua')->subject($data['name'] . ' contactó');
     //                $message->from('notificaciones@colchonesdechihuahua.com', 'Notificaciones Colchones de Chihuahua');
     //            });

                return response()->json([
                    'send' => true
                ]);
            }
    	}
    }
}
