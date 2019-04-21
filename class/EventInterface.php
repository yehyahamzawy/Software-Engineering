<?php 

 interface iEvent {
    public function attach(User $observer_in);
    public function detach(User $observer_in);
    public function notify();

}
 ?>
