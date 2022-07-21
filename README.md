Latte renderer for the Wireframe output framework
-------------------------------------------------

This module is an optional renderer add-on for the Wireframe output framework, adding support for
the Latte templating engine.

**Note**: this module is currently considered an early beta release. If you run into any problems,
please open an issue at https://github.com/wireframe-framework/WireframeRendererLatte/issues.

## Basic usage

First of all, you need to install both Wireframe and WireframeRenderLatte, and then set up Wireframe
(as instructed at https://wireframe-framework.com/getting-started/). Once that's done, you can open
the bootstrap file (wireframe.php) and instruct Wireframe to use the Latte renderer:

```php
// during Wireframe init (this is the preferred way):
$wireframe->init([
    'renderer' => ['WireframeRendererLatte', [
        'latte' => [
            // just an example (this is the default value)
            'tempDirectory' => $this->wire('config')->paths->cache . '/WireframeRendererLatte',
        ],
        'ext' => 'latte', // file extension ('latte' is the default value)
    ]],
]);

// ... or after init (this incurs a slight overhead):
$wireframe->setRenderer('WireframeRendererLatte', [
    // optional settings array
]);
```

## Latte templates

Once you've told Wireframe to use the Latte renderer, by default it will attempt to render all your
views, layouts, and components using Latte. File extension for Latte templates is `.latte`, though you
can override this if you prefer something else (see examples in the "Basic usage" section).

Note that if a Latte file can't be found, Wireframe will automatically fall back to native (`.php`)
file. This is intended to ease migrating from PHP to Latte, and also makes it possible for Latte and
PHP view files to co-exist.

> If you need help with Latte and its syntax, visit https://latte.nette.org/.

### Includes (partials)

Latte provides a function for including other templates (`{include 'some.latte'}`), and in the
context of Wireframe this translates best to the concept of partials. As such using this function
looks for include files from the Wireframe partials directory:

```
{include 'header.latte'}
```

```
.
|-- partials
|   `-- header.latte
```

### Extending Latte

If you want to add filters, functions, tags, etc. to Latte, you can access the Latte Engine
by hooking into `WireframeRendererLatte::initLatte`:

```php
// site/ready.php
$wire->addHookAfter('WireframeRendererLatte::initLatte', function(HookEvent $event) {
	$event->return->addFilter('shortify', function (string $s): string {
		return mb_substr($s, 0, 10); // shortens the text to 10 characters
	});
});
```

```
{$page->name|shortify}
```
