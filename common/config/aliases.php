<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('noderoot', dirname(dirname(__DIR__)) . '/frontend/web/node');
Yii::setAlias('node', 'http://' . $_SERVER["HTTP_HOST"] . '/node');
//Yii::setAlias('noderoot', dirname(dirname(__DIR__)) . '/node');
//Yii::setAlias('node', 'http://' . str_replace(['backend', 'frontend'], 'advanced', $_SERVER["HTTP_HOST"]) . '/node');
