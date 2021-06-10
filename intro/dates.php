<?php
  //Print current date
  /**
  The PHP date() function formats a timestamp to a more readable date and time.
  date(format,timestamp)
  The required format parameter of the date() function specifies how to format the date (or time).
  Here are some characters that are commonly used for dates:
  d - Represents the day of the month (01 to 31)
  m - Represents a month (01 to 12)
  Y - Represents a year (in four digits)
  l (lowercase 'L') - Represents the day of the week
  Other characters, like"/", ".", or "-" can also be inserted between the characters
  to add additional formatting.
  The example below formats today's date in three different ways:
*/
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";

//Get a Time
/**
  Here are some characters that are commonly used for times:

  H - 24-hour format of an hour (00 to 23)
  h - 12-hour format of an hour with leading zeros (01 to 12)
  i - Minutes with leading zeros (00 to 59)
  s - Seconds with leading zeros (00 to 59)
  a - Lowercase Ante meridiem and Post meridiem (am or pm)
  The example below outputs the current time in the specified format:
*/
echo 'The time is' . date('h:i:s:') . "<br>";
/**
If the time you got back from the code is not correct,
it's probably because your server is in another country or set up for a different timezone.
So, if you need the time to be correct according to a specific location,
you can set the timezone you want to use.
The example below sets the timezone to "America/New_York",
then outputs the current time in the specified format:
*/
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa") . '<br>';
//Create a Date With mktime()
/**
  The optional timestamp parameter in the date() function specifies a timestamp.
  If omitted, the current date and time will be used (as in the examples above).

  The PHP mktime() function returns the Unix timestamp for a date.
  The Unix timestamp contains
  the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
  mktime(hour, minute, second, month, day, year)
*/
$d=mktime(11, 14, 54, 6, 10, 2021);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . '<br>';;
//Create a Date From a String With strtotime()
/**
The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp
(the number of seconds since January 1 1970 00:00:00 GMT).
Syntax
strtotime(time, now)
*/
$d=strtotime("10:30pm June 10 2021");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . '<br>';

//PHP is quite clever about converting a string to a date, so you can put in various values:
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

//https://www.php.net/manual/en/timezones.others.php
 ?>
