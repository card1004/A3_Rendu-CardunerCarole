# Data Type Validator
### by Carole Carduner A3 Web1

[![Build Status](https://travis-ci.org/card1004/A3_Rendu-CardunerCarole.svg?branch=master)](https://travis-ci.org/card1004/A3_Rendu-CardunerCarole) [![Code Coverage](https://scrutinizer-ci.com/g/card1004/A3_Rendu-CardunerCarole/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/card1004/A3_Rendu-CardunerCarole/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/card1004/A3_Rendu-CardunerCarole/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/card1004/PHP_PSRA3_Rendu-CardunerCarole/?branch=master)

This is a library use to validate the following data type :
    - Boolean
    - Integer
    - String
    - Array
    - Date
    
All methods return true if the validation is validate and false if it isn't.


## What does it validate ?
********************************************

### Boolean
    - True
    - False


### Integer
    - Equal to
    - Superior to
    - Inferior to
    - Between X and X
   
    
### String
    - String length equal to
    - String superior equal to
    - String inferior equal to
    - String doesn't start nor end with a space
    - String with no space
    
    
### Array
    - The array is empty
    - The number of elements = / > / >= / < / <=
    - The number of elements between X and X
    - Contain a precise key
    - Contain a precise value
  
  
### Date
    - Current day
    - Current month
    - Current year
    - Current Date (day, month, year)
