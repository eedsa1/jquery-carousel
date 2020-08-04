<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    //
    public function index(){

    	return view('index');

    }

    public function index2(){

    	return view('index2');

    }

    public function index3(){

    	return view('index3');

    }

    public function index4(){

        return view('index4');

    }

    //retorna uma página com efeito de lightbox básico permitindo adição de 
    //imagem, video, texto etc.
    public function index5(){

        return view ('index5');

    }

    //exibe um simples accordion somente com css
    public function index6(){

        return view ('index6');

    }

    //exibe um simples accordion com jquery
    public function index7(){

        return view ('index7');

    }

    //exibe um slider simples com somente css usando keyframe
    public function index8(){

        return view ('index8');

    }

    //galeria de imagens simples
    public function index9(){

        return view ('index9');

    }

    //player de video com CSS e javascript
    public function index10(){

        return view ('index10');

    }

    //video em background
    public function index11(){

        return view ('index11');

    }

    public function index12(){

        return view ('index12');

    }


}
