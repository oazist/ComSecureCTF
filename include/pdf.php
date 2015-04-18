<?php
header('Content-disposition: attachment; filename=hint.pdf');
header('Content-type: application/pdf');
readfile('../doc/hint.pdf');