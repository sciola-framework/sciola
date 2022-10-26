![Folder](https://github.com/sciola-git/sciola-git.github.io/blob/main/images/icons/folder.svg?raw=true)

# layers

### MVC - [ Model | View | Controller ]

```mermaid
graph TD;
    User-->Controller;
    Controller-->Model;
    Model-->Controller;
    Controller-->View;
    View-->User;
```

## Controller

File: **MyController.php**

```php
<?php

namespace Layers\Controllers;

use Framework\Controller;

class MyController extends Controller
{
    public function method()
    {
        return view('my-view');
    }
}
```

## Model

File: **MyModel.php**

```php
<?php

namespace Layers\Models;

use Framework\Model;

class MyModel extends Model
{
    public function method()
    {

    }
}
```

## View

File: **my-view.html**

```twig
{% include header with {
    meta: {
      title: '',
      subject: '',
      description: '',
      keywords: ''
    },
    css : ['/packages/foo-1/style.min.css',
           '/packages/foo-2/style.min.css',
           '/packages/foo-3/style.min.css']
  }
%}
<h1>Page content</h1>
{% include footer with {
    js : ['/packages/foo-1/script.min.js',
          '/packages/foo-2/script.min.js']
  }
%}
```
