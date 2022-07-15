<?php

namespace App\Http\Controllers;

use App\Users;
use App\Chats;
Use App\Mensajes;
use App\Servicios;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($id_servicio)
    {
        $usuario = \Auth::user();
        $servicio = Servicios::find($id_servicio);

        $chat = Chats::where('id_cliente', $usuario->id)
        ->where('id_servicio', $servicio->id)->where('status',1)->first();

        if($chat)
        {
            $mensajes = Mensajes::where('id_chat',$chat->id)->get();
            return view('chat.index')->with('usuario', $usuario)->with('servicio', $servicio)->with('chat',$chat)->with('mensajes',$mensajes);
        }
        else
        {
            Chats::create([
                'id_servicio'=> $servicio->id,
                'id_cliente' => $usuario->id,
                'status' => 1,
            ]);

            $chat = Chats::where('id_cliente', $usuario->id)
            ->where('id_servicio', $servicio->id)->where('status',1)->first();

            $mensajes = Mensajes::where('id_chat',$chat->id)->get();
            return view('chat.index')->with('usuario', $usuario)->with('servicio', $servicio)->with('chat',$chat)->with('mensajes',$mensajes);
        }
    }

    public function nuevomen(Request $request, $id_chat)
    {
        $datos = $request->all();
        $chat = Chats::find($id_chat);

        Mensajes::create([
            'id_chat' => $chat->id,
            'mensaje' => $datos['mensaje'],
            'emisor' => $datos['emisor'],
            'status' => 1,
        ]);

        $usuario = \Auth::user();
        $servicio = Servicios::where('id',$chat->id_servicio)->first();
        $mensajes = Mensajes::where('id_chat',$chat->id)->get();

        return view('chat.index')->with('usuario', $usuario)->with('servicio', $servicio)->with('chat',$chat)->with('mensajes',$mensajes);
    }

    public function vermensajes()
    {
        $usuarioac = \Auth::user();

        $resp = Chats::where('id_cliente',$usuarioac->id)->where('status',1)->get();

        $servicios = Servicios::where('id_usuario', $usuarioac->id)->first();

        $preg = Chats::where('id_servicio',$servicios->id)->where('status',1)->get();

        return view('chat.admin')->with('resp', $resp)->with('preg',$preg)->with('usuario',$usuarioac);
    }

    public function vermensajesx($id_chat)
    {
        $chat = Chats::where('id', $id_chat)->first();
        $mensajes = Mensajes::where('id_chat', $chat->id)->get();
        $servicio = Servicios::where('id', $chat->id_servicio)->first();
        $usuario = \Auth::user();

        return view('chat.index')->with('usuario', $usuario)->with('servicio', $servicio)->with('chat',$chat)->with('mensajes',$mensajes);
    }

    public function eliminarchat($id_chat)
    {
        $chat = Chats::where('id', $id_chat)->first();
        $chat->status = 0;
        $chat->save();

        $usuarioactual = \Auth::user();
        $servicios = Servicios::where('status',1)
        ->where('id_usuario','!=',$usuarioactual->id)->get();

        return view('listaservicios')->with('servicios',$servicios)->with('usuarioactual',$usuarioactual);
    }
}
