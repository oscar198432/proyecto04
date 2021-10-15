<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Letras extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
               <h1>Componente inline letras</h1>
            </div>

            <div>
                <h2>Cronometro</h2>

                <div>

                    <?php

                    echo("Esto trabaja en php");

                    // $cente = 10;


                    // class Timer {

                    //     var $classname = "Timer";
                    //     var $start = 0;
                    //     var $stop = 0;
                    //     var $elapsed = 0;
                     
                       
                    //     function Timer( $start = true ) {
                    //        if ( $start )
                    //           $this->start();
                    //     }
                     
                        
                    //     function start() {
                    //        $this->start = $this->_gettime();
                    //     }
                     
                        
                    //     function stop() {
                    //        $this->stop = $this->_gettime();
                    //        $this->elapsed = $this->_compute();
                    //     }
                       
                       
                    //     function elapsed() {
                    //        if ( !$elapsed )
                    //           $this->stop();
                     
                    //        return $this->elapsed;
                    //     }
                       
                       
                    //     function reset() {
                    //        $this->start = 0;
                    //        $this->stop = 0;
                    //        $this->elapsed = 0;
                    //     }
                     
                    //    //mp
                       
                       
                    //     function _gettime() {
                    //        $mtime = microtime();
                    //        $mtime = explode( " ", $mtime );
                    //        return $mtime[1] + $mtime[0];
                    //     }
                       
                       
                    //     function _compute() {
                    //        return $this->stop - $this->start;
                    //     }
                    //  }
                     
                    
                    ?>
                </div>
            </div>
        blade;
    }
}
