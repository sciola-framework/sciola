![Folder](https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true)

# libraries

**In this directory are the libraries of your application.**

You can create your classes in this directory and call them anywhere in your application. Example:

File: **Foo.php**

```php
<?php

namespace Lib;

class Foo
{
    public function bar()
    {
        return 1;
    }
}
```

In controller, model or other library:

```php
<?php

use Lib\Foo;

class MyClass
{
    public function demo()
    {
        $Foo = new Foo;
        echo $Foo->bar();
    }
}
```
