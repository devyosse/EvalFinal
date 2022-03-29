<?php

function is_admin(): bool
       {
           if(!empty($_SESSION['role'] && $_SESSION['role'] >= 2)) {
               return true; // he is admin
	      } else {
               return false; // he is not admin
	      }
       }
	   function is_user(): bool
       {
           if (!empty($_SESSION['role'] && $_SESSION['role'] >= 3)) {
               return true; // he is admin
           } else {
               return false; // he is not admin
           }
       }






