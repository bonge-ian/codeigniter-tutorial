<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/foundation.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <style>
        body {
            font-family: Segoe UI, Quicksand, Ebrima, Lato;
            font-size: 18px;
            margin-top: 20px;
            background-image: url("<?= base_url('assets/img/tri.jpg'); ?>");
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
            
        }
        .greeting {
            font-family: verdana !important;
            color: #000 !important;
            text-align: left !important;
            font-weight: bold;
            font-size: 16px;
        }
        .response {
            border: 1px solid !important;
            display: block !important;
            font-size: 25px !important;
            font-weight: normal !important;
            margin-bottom: 1.11111rem !important;
            padding: 0.77778rem 1.33333rem !important;
            position: relative !important;
            transition: opacity 300ms ease-out !important;
            background-color: rgba(239, 66, 36, 0.85) !important;
            color: #FFFFFF:
        }
        .title {
            font-family: verdana !important;
            color: #008CBA;
            text-align: center;
            font-weight: bold;
            font-size: 15px;
        }
        .side-nav {
            list-style-type: none;
        }
        
        h2 {
            font-family: Microsoft Yi Bait !important;
            font-size: 50px;
            text-align: center:
            color: #343434;
        }
        label {
            font-size: 18px;
        }
       .description {
            font-family: arial !important;
            color: #000;
        }
        
    </style>
  </head>
  <body>
