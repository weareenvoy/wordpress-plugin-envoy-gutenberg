# Envoy Gutenberg

This is a WordPress Plugin.
It adds blocks to the Gutenberg editing experience

# How do I install this plugin using composer?

Add this to your project's existing `composer.json`:
```
  "repositories": [

    ...

    {
      "type": "vcs",
      "url": "https://github.com/weareenvoy/wordpress-plugin-envoy-gutenberg.git"
    }

    ...

  ],
```

Then from the terminal, run:

```
composer require envoy/envoy-gutenberg;
```

The plugin files will be placed into your project directory at:
```
/web/app/plugins/envoy-gutenberg
```

Add this to your project's `.gitignore`:

```
**/plugins/envoy-gutenberg
```

