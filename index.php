<?php

require "Model.php";
$model = new Model;
$products = $model->getData();

require "view.php";