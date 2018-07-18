<?php

    function mustLogin() {
        if (!isset($_SESSION['user'])) redirectTo('/');
    }

    function mustBeTeacher() {
        if (is_null($_SESSION['user']['class'])) redirectTo('/');
    }


