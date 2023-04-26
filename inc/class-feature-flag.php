<?php

abstract class Feature_Flag {

    public function is_met() {
        $feature_flag = \strtoupper( $this->get_feature_flag() );
        
		return \defined( 'CONCH_FEATURE_' . $feature_flag ) && \constant( 'CONCH_FEATURE_' . $feature_flag ) === true;
    }

    abstract protected function get_feature_flag();

    public function get_feature_name() {
        return $this->get_feature_flag();
    }

}