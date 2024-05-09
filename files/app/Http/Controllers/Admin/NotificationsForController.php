<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Carbon\Carbon;

function ifFunc($passedTime, $dateFromDB) {

    if (($passedTime > 172800)) {
        $passedTime = $dateFromDB->format('Y-m-d');
    } else if ($passedTime > 86400) {
        $passedTime = 'Больше суток';
    } else if ($passedTime > 72000) {
        $passedTime = '20 часов';
    } else if ($passedTime > 57600) {
        $passedTime = '16 часов';
    } else if ($passedTime > 43200) {
        $passedTime = '12 часов';
    } else if ($passedTime > 28800) {
        $passedTime = '8 часов';
    } else if ($passedTime > 21600) {
        $passedTime = '6 часов';
    } else if ($passedTime > 18000) {
        $passedTime = '5 часов';
    } else if ($passedTime > 14400) {
        $passedTime = '4 часа';
    } else if ($passedTime > 10800) {
        $passedTime = '3 часа';
    } else if ($passedTime > 7200) {
        $passedTime = '2 часа';
    } else if ($passedTime > 3600) {
        $passedTime = '1 час';
    } else if ($passedTime > 2700) {
        $passedTime = '45 минут';
    } else if ($passedTime > 1800) {
        $passedTime = '30 минут';
    } else if ($passedTime > 900) {
        $passedTime = '15 минут';
    } else if ($passedTime > 600) {
        $passedTime = '10 минут';
    } else if ($passedTime > 300) {
        $passedTime = '5 минут';
    } else if ($passedTime > 60) {
        $passedTime = '1 минуту';
    } else if ($passedTime > 30) {
        $passedTime = '30 секунд';
    } else {
        $passedTime = 'только что';
    }

    return $passedTime;
}

Class NotificationsForController {


    public static function passedTime() {
        $questions = Question::where('viewed', 'false')->get();
        $passedTime = '';

        if (count($questions) > 0) {
            $dateFromDB = Carbon::parse($questions->last()->create);
            $dateNow = Carbon::now();
            $passedTime = ($dateNow->setTimezone("Europe/Moscow")->timestamp) - ($dateFromDB->timestamp-10800);
            $passedTime = ifFunc($passedTime, $dateFromDB);
        }

        return $passedTime;
    }






    public static function passedTimeForQuestion($time) {
        $dateFromDB = Carbon::parse($time);
        $dateNow = Carbon::now();
        $passedTimeForQuestion = ($dateNow->setTimezone("Europe/Moscow")->timestamp) - ($dateFromDB->timestamp - 10800);
        $passedTimeForQuestion = ifFunc($passedTimeForQuestion, $dateFromDB);
        $time = $passedTimeForQuestion;

        return $time;
    }




    public static function questions() {
        $questions = Question::where('viewed', 'false')->get();

        return $questions;
    }

    public static function questionsAll() {
        $questions = Question::all();

        return $questions;
    }






    public static function questionsForMsg() {
        $questions = Question::where('viewed', 'false')->get();

        if (count($questions) > 2) {
            $questionsForMsgArray = [$questions[0], $questions[1], $questions[2]];
        } else if (count($questions) == 2) {
            $questionsForMsgArray = [$questions[0], $questions[1]];
        } else if (count($questions) == 1) {
            $questionsForMsgArray = [$questions[0]];
        } else {
            $questionsForMsgArray = ['Нет новых сообщений'];
        }

        return $questionsForMsgArray;
    }
}
