<?php
/**
 * Standard controller layout.
 *
 */
class CCIndex implements IController {

    /**
     * Implementing interface IController. All controllers must have an index action.
     */
    public function Index() {
        global $ja;
        $ja->data['title'] = "The Index Controller";
    }

}