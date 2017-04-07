<?php


interface ControllerInterface
{
    public function actionView($view);
    public function actionAdd();
    public function actionDelete();
    public function actionUpdate();
}