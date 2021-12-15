## What is is_htmlspecialchars ?

This package serves to check whether the data shared with it contains HTML special characters. The data must be specified in `string` type. Returns `true` if the HTML contains special characters, otherwise `false`.

data:
```php
$code = 'merhaba &lt;?=$this-&gt;timestamp;?&gt;';
```

**Out-of-class use:**

code:
```php
require_once('Mind.php');
if($m::aliyilmaz('is_htmlspecialchars')->is_htmlspecialchars($code)){
    echo 'HTML contains special characters.';
} else {
    echo 'HTML does not contain special characters';
}
```

**When using it in the class:**

code:
```php
if(self::aliyilmaz('is_htmlspecialchars')->is_htmlspecialchars($code)){
    echo 'HTML contains special characters.';
} else {
    echo 'HTML does not contain special characters';
}
```

output:
```php
HTML contains special characters.
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/is_htmlspecialchars/blob/main/LICENSE) license.