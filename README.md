# P8Two
Just another playground for testing new features of PHP8.2.x 
- nothing special to discover here   

<pre>

                                 .''.
       .''.             *''*    :_\/_:     .
      :_\/_:   .    .:.*_\/_*   : /\ :  .'.:.'.
  .''.: /\ : _\(/_  ':'* /\ *  : '..'.  -=:o:=-
 :_\/_:'.:::. /)\*''*  .|.* '.\'/.'_\(/_'.':'.'
 : /\ : :::::  '*_\/_* | |  -= o =- /)\    '  *
  '..'  ':::'   * /\ * |'|  .'/.\'.  '._____
      *        __*..* |  |     :      |.   |' .---"|
       _*   .-'   '-. |  |     .--'|  ||   | _|    |
    .-'|  _.|  |    ||   '-__  |   |  |    ||      |
    |' | |.    |    ||       | |   |  |    ||      |
 ___|  '-'     '    ""       '-'   '-.'    '`      |____    
</pre>



## New Features

### Readonly classes

- see: https://wiki.php.net/rfc/readonly_classes
- see: https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.readonly
- see: <code>SchrodtSven\P8Two\Entity\BlogArticle</code> and test


### Disjunctive Normal Form (DNF) Types 

DNF types allow us to combine union and intersection types, following a strict rule: when combining union and intersection types, intersection types must be grouped with brackets. 

- see: <code>SchrodtSven\P8Two\Entity\PersonFactory</code> and <code>test/Entity/PersonFactoryTest</code>

### Allow null, false, and true as stand-alone types

- see: <code>SchrodtSven\P8Two\Entity\NonBinaryValue</code> and <code>test/Entity/NonBinaryValueTest</code>

###  Constants in traits

You cannot access the constant through the name of the trait, but, you can access the constant through the class that uses the trait. 

### Deprecate dynamic properties

The creation of dynamic properties is deprecated to help avoid mistakes and typos, unless the class opts in by using the <code>#[\AllowDynamicProperties]</code> attribute. <code>\stdClass</code> still allows dynamic properties. (what else^?)

Usage of the <code>__get</code>/<code>__set</code> magic methods is not affected by this change.

- see: <code>test/MixedTest/::testDynamicCreationOfPropertiesDeprecation()</code>


## Appendix

### Used web resources

- https://www.php.net/releases/8.2/en.php et seqq.
- https://www.php.net/manual/en/migration82.php et seqq.