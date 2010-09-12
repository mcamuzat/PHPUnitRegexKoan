<?php
// How to play it 
// On Linux
// $ phpunit --colors regex.php
// I need to learn Regex and PHPUnit
// The tutorial come from a game in python
// http://www.pyweek.org/e/RegExExpress/ 
// a really nice and usefull game.
// The original licence is BSD.

require_once 'PHPUnit/Framework.php';
class Test extends PHPUnit_Framework_TestCase
{
    /**
     * Easy  Train 
     */
    public function testRegexChapter1()
    {
        // Regular expressions (regex) are patterns that describe and match strings of text.
        // The simplest of these are exact duplicates of the string to match.
        // For example, the regular expression "the" matches the text "the" 
        $this->assertRegExp('/the/', 'the');
        // and in a search will match "is the" and "theory", 
        $this->assertRegExp('/the/', 'theory');
        $this->assertRegExp('/the/', 'is the');
        // since those contain the pattern described in the regex.
        // In this way,"ing" would match "string", "ingrid", and "binge",
        $this->assertRegExp('/ing/', 'string');
        $this->assertRegExp('/ing/', 'ingrid');
        $this->assertRegExp('/ing/', 'binge');
        // but not "gin", "tong" or "injury"',
        $this->assertNotRegExp('/ing/', 'gin');
        $this->assertNotRegExp('/ing/', 'tong');
        $this->assertNotRegExp('/ing/', 'injury');

        // You turn 

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Will return true 
        $this->assertRegExp($Your_answer, 'beach');
        $this->assertRegExp($Your_answer, 'peacok');
        $this->assertRegExp($Your_answer, 'peace');
        // Will return false for this list
        $this->assertNotRegExp($Your_answer, 'fact');
        $this->assertNotRegExp($Your_answer, 'fleece');
        $this->assertNotRegExp($Your_answer, 'eat');

        // This here is an easy puzzle, all you gotta do is find the "piece of string,"
        // which is to say, the string of letters that is shared among the words you need to match.
        // I'll give you hint: it starts with the letter "e".
    }

    /**
     * Dotty
     * You need to complete the first question 
     * @depends testRegexChapter1
     */

    public function testRegexChapter2()
    {
        // Certain symbols have special meanings in regex. 
        // The dot "." represents any character except a new line character.
        //  "m.ce" will match "mace", "mice",    
        $this->assertRegExp('/m.ce/', 'mice');
        $this->assertRegExp('/m.ce/', 'mace');
        // and even strange things like "mdce" or "mmce".
        $this->assertRegExp('/m.ce/', 'mdce');
        $this->assertRegExp('/m.ce/', 'mmce');
        //You turn 

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'brake');
        $this->assertRegExp($Your_answer, 'broke');
        $this->assertRegExp($Your_answer, 'bloke');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'bleak');
        $this->assertNotRegExp($Your_answer, 'brave');
        $this->assertNotRegExp($Your_answer, 'blame');



        //  Hope we didn't scare you off with this puzzler.
        // It's like the first one, but you gotta use the "." maybe more than once.
        // There ain't just one solution.
    }

    /**
     * Odd Character
     * @depends testRegexChapter2
     */

    public function testRegexChapter3()
    {
        // Well, you may ask, how do I match the "." if that character matches anything?
        // Easy, put it in a class! This "[.]" will match just a single dot.
        // This works for most any special characters.
        //
        // Also, single characters can be "escaped" by preceding them with a backslash
        // "\". So "\." will also match a single dot.

        $Your_answer= '/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'file.txt');
        $this->assertRegExp($Your_answer, 'something.txt');
        $this->assertRegExp($Your_answer, 'train.txt');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'filemtxt');
        $this->assertNotRegExp($Your_answer, 'extp.txp');
        $this->assertNotRegExp($Your_answer, 'file.bat');

        // Scratchin' your head? Remember you don't have to match the whole thing, just part of
        // it, and "[.]" is going to help.
    }

    /**
     * Classy
     * @depends testRegexChapter3
     */

    public function testRegexChapter4()
    {
        // The brackets [] can be used to create a "class"
        // which will match any one of the included letters.
        // "fa[bnt]" will match either "fab", "fan", or "fat".
        // Sounds easy, right?',

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'tape');
        $this->assertRegExp($Your_answer, 'tame');
        $this->assertRegExp($Your_answer, 'tale');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'take');
        $this->assertNotRegExp($Your_answer, 'tase');
        $this->assertNotRegExp($Your_answer, 'tare');
        // This is easy, folks. No need for nobody to get scared,
        // just think calm like you do. You gotta use a class for this.
        // The "." will not do the trick.

    }
    /**
     * Open Range
     * @depends testRegexChapter4
     */
    public function testRegexChapter5()
    {
        // Another trick with the classes is the range using the "-".
        // "[a-z]" will match any lower case letter,
        // "[1-5]" will match the digits "1", "2", "3", "4", or "5".
        // This one's easy, too.

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'file1');
        $this->assertRegExp($Your_answer, 'file2');
        $this->assertRegExp($Your_answer, 'file3');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'file4');
        $this->assertNotRegExp($Your_answer, 'file5');
        $this->assertNotRegExp($Your_answer, 'file6');

        //Add a little difficulty

        $this->assertLessThanOrEqual(7,strlen($Your_answer),"Your answer is good but not optimum");
        // Alright, I told you it was an easy one. 
        // Try creating a class range similar to the one in the example.
        // What're you waiting for?'This is easy, folks.
    }

    /**
     * Outlaws!
     * @depends testRegexChapter5
     */


    public function testRegexChapter6()
    {
        // OK, let's say you want to match almost any character?
        // Start your class with a "^" like this: "[^x]". 
        // That will match anything like "."  does but not the letter "x".
        // "ba[^d]" will match "bat", "ban", and "bag", but not "bad".


        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'brags');
        $this->assertRegExp($Your_answer, 'brass');
        $this->assertRegExp($Your_answer, 'brats');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'brave');
        $this->assertNotRegExp($Your_answer, 'brail');
        $this->assertNotRegExp($Your_answer, 'brays');

        //Add a little difficulty

        $this->assertLessThanOrEqual(10,strlen($Your_answer),"Your answer is good but not optimum");
        // Now, there are a lot of ways to solve this one,
        // but try using the trick I showed you.
        // The outlaw here is the "y".)
    }
    /**
     * Happy Endings.
     * @depends testRegexChapter6
     */

    public function testRegexChapter7()
    {
        // If you need to match something at the beginning or end of a word,
        // you can use "\\b" for either one.
        // "\\bthe" will match "theory" and "theopolis"
        // but not "bathe" or "lathe".
        // However, "the\\b" will match only the second two.
        // "\\bthe\\b" will only match "the".'

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'bears');
        $this->assertRegExp($Your_answer, 'tigers');
        $this->assertRegExp($Your_answer, 'briars');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'curse');
        $this->assertNotRegExp($Your_answer, 'parsed');
        $this->assertNotRegExp($Your_answer, 'ersatz');

        // There is a two letter pattern in all of these words,
        // but you only want to match it at maybe the beginning of end of the words.
        // Got it now?
    }

    /**
     * Classy again ...
     * @depends testRegexChapter7
     */

    public function testRegexChapter8()
    {
        // There is a shorthand way of using certain commonly used classes.
        // It involves the special backslash "\\"
        // character we saw in the last question.
        // For example: "\\d" is the same as [0-9], so it will match any digit.',

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'file01.txt');
        $this->assertRegExp($Your_answer, 'file02.txt');
        $this->assertRegExp($Your_answer, 'file03.txt');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'file0a.txt');
        $this->assertNotRegExp($Your_answer, 'file0b.txt');
        $this->assertNotRegExp($Your_answer, 'file0c.txt');

        // You can solve this one by typing four characters, if you use the "\\d".

        $this->assertLessThanOrEqual(6,strlen($Your_answer),"Your answer is good but not optimum");

    }


    /**
     * Classier
     * @depends testRegexChapter8
     */

    public function testRegexChapter9()
    {
        // Here are the other shorthand classes.
        // "\\D" is all nondigits "[^0-9]".
        // "\\s" is any white space character, like " ".
        // "\\S" is anything that is not white space.
        // "\\w" is alphanumerics [0-9a-zA-Z_].
        // "\\W" is the opposite of "\\w".

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 't 34');
        $this->assertRegExp($Your_answer, 's 34');
        $this->assertRegExp($Your_answer, 'p 09');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 't134');
        $this->assertNotRegExp($Your_answer, 'g  4');
        $this->assertNotRegExp($Your_answer, '1 09');

        // Getting trickier, that\'s on purpose!
        // Look for patterns of digits, non-digits, whitespace, etc.
    }
    /**
     * This or that
     * @depends testRegexChapter9
     */



    public function testRegexChapter10()
    {
        // There is another special character "|" 
        // that lets you match either the expression on the left or the expression on the right.
        // "old|young" would match either "old" or "young".
        // If you only want this to apply to a certain part of your regex,
        // you can use parenthesis like this "I am (old|young|happy)\\."
        // That matches "I am old." and "I am young." and "I am happy".

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'take it easy');
        $this->assertRegExp($Your_answer, 'take her easy');
        $this->assertRegExp($Your_answer, 'take this easy');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'take him easy');
        $this->assertNotRegExp($Your_answer, 'take me easy');
        $this->assertNotRegExp($Your_answer, 'take the easy way');

        // Just look at the last example.
    }

    /**
     *Repite Por favor 
     * @depends testRegexChapter10
     */


    public function testRegexChapter11()
    {
        // If you need to repeat a specific element just the right number of times,
        // you can specify a number to repeat inside of curly brackets "{}".
        // So if you wanted to match the letter a three times in a row, you would type "a{3}".
        // That would match "aaa".
        // Another example ".{4}" would match any four characters.

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 'sweeet');
        $this->assertRegExp($Your_answer, 'laaat');
        $this->assertRegExp($Your_answer, 'bleaap');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'heap');
        $this->assertNotRegExp($Your_answer, 'sweap');
        $this->assertNotRegExp($Your_answer, 'bleeb');

        // Easy.

    }
    /**
     *Wagon Train 
     * @depends testRegexChapter11
     */

    public function testRegexChapter12()
    {
        // If one or two or three things is good, then a whole bunch is even better, right?
        // If you want something to match any number of times in a row,
        // just put a "+" after it.
        // The "*" works the same way, but also matches zero instances.
        // Therefore "po*w" will match "pw", "pow", "poow", and so forth.
        // "po+w" would not match "pw" because the "+" requires at least one.
        // It can be used with classes like this: "[abc]*".

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, 't4h');
        $this->assertRegExp($Your_answer, 't6546h');
        $this->assertRegExp($Your_answer, 't083h');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, 'tph');
        $this->assertNotRegExp($Your_answer, 't89sh');
        $this->assertNotRegExp($Your_answer, '083ht');

        // Remember, the "\\d" represents any digit. Might be handy.

    }
    /**
     *General Repeater 
     * @depends testRegexChapter12
     */


    public function testRegexChapter13()
    {
        // So the general form of repeating elements is "{a,b}" 
        // where the pattern must match a minimum of "a" times and a maximum of "b" times.
        // If you leave the second number empty, then there is no maximum number of repetitions.
        // So, "{0,}" is the same as "*" matching zero or more repetitions.
        //     "{1,}" is the same as "+" matching one or more repetitions.

        $Your_answer='/Your Answer/'; //<= Put your answer here

        // Must return true 
        $this->assertRegExp($Your_answer, '9999');
        $this->assertRegExp($Your_answer, '99999');
        $this->assertRegExp($Your_answer, '999999');
        // Must return false for this list
        $this->assertNotRegExp($Your_answer, '999');
        $this->assertNotRegExp($Your_answer, '99');
        $this->assertNotRegExp($Your_answer, '9');

        // Remember, the first number in curly brackets is the minimum repetitions.
    }

}

?>
