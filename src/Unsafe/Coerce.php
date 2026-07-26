<?php

$unsafeCoerce = function($x) use (&$unsafeCoerce) {
  $__num = \func_num_args();
  return 1 < $__num ? $x(...\array_slice(\func_get_args(), 1)) : $x;
};

$exports['unsafeCoerce'] = $unsafeCoerce;
return $exports;
