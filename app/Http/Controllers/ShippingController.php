<?php

namespace App\Http\Controllers;
use App\Models\PricingRules;

class ShippingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function calculate_shipment_fee($str_rule, $weight) {
        $rule = $this->_get_rule($str_rule);
        return $this->_calculate_shipment_fee_by_params($weight, $rule);
    }

    private function _get_rule($str_rule) {
        preg_match('/^rule([0-9]*$)/', $str_rule, $matches);
        if(isset($matches[1])) {
            return PricingRules::findOrFail($matches[1]);
        } else {
            return false;
        }
    }

    private function _calculate_shipment_fee_by_params($weight, $rule) {
        if(!$rule) {
            return -1;
        }

        $weight       = ceil($weight);
        $extra_weight = $weight - $rule->base_weight_range;
        if($extra_weight <= 0) {
            return $rule->fixed_fee;
        } else {
            return $rule->fixed_fee + $extra_weight * $rule->extra_weight_fee;
        }
    }
}
