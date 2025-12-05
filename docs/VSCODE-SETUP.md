# Fixing VSCode Warnings

The warnings you see are normal for WordPress plugins - VSCode doesn't recognize WordPress functions by default.

## Quick Fix Options

### Option 1: Install PHP Intelephense Extension (Easiest)

1. Open VSCode Extensions (Ctrl+Shift+X)
2. Search for "PHP Intelephense"
3. Install it
4. Reload VSCode

The `.vscode/settings.json` file is already configured with WordPress and WooCommerce stubs.

### Option 2: Install WordPress Stubs via Composer (Best for Development)

**If you have Composer installed:**

```powershell
cd c:\Users\mykyta.kolotylo\code\discogs
composer install
```

**If you don't have Composer:**

1. Download from https://getcomposer.org/download/
2. Install Composer globally
3. Run `composer install` in the plugin directory

### Option 3: Ignore the Warnings (Quick Solution)

The warnings don't affect functionality - your plugin will work perfectly in WordPress. The warnings only appear because VSCode doesn't know about WordPress functions.

To suppress them:
1. The `.vscode/settings.json` is already configured
2. Just reload VSCode: Ctrl+Shift+P → "Developer: Reload Window"

## What's Been Created

I've added these configuration files:

1. **composer.json** - Defines WordPress and WooCommerce stubs as dependencies
2. **.vscode/settings.json** - Configures PHP Intelephense with WordPress stubs
3. **.vscode/extensions.json** - Recommends helpful extensions

## Recommended VSCode Extensions

Install these from the Extensions marketplace:

1. **PHP Intelephense** (bmewburn.vscode-intelephense-client)
   - Best PHP language server
   - Has built-in WordPress support

2. **WordPress Toolbox** (wordpresstoolbox.wordpress-toolbox)
   - WordPress function completion
   - Snippet support

3. **WooCommerce** (claudiosanches.woocommerce)
   - WooCommerce specific support

## After Installing Extensions

1. Reload VSCode window: `Ctrl+Shift+P` → "Developer: Reload Window"
2. Wait for Intelephense to index (see bottom-right status bar)
3. Warnings should disappear!

## Why These Warnings Appear

VSCode doesn't know about WordPress functions like:
- `add_action()`, `add_filter()`
- `get_option()`, `update_option()`
- `wp_enqueue_script()`, `wp_enqueue_style()`
- `esc_html()`, `sanitize_text_field()`
- etc.

These are all valid WordPress functions that work perfectly when the plugin runs in WordPress.

## Alternative: phpcs.xml (For WordPress Coding Standards)

If you want to check code quality, create a `phpcs.xml.dist`:

```xml
<?xml version="1.0"?>
<ruleset name="Vinyl Shop Discogs">
    <description>WordPress Coding Standards</description>
    
    <rule ref="WordPress-Core" />
    <rule ref="WordPress-Extra" />
    
    <exclude-pattern>*/vendor/*</exclude-pattern>
    <exclude-pattern>*/node_modules/*</exclude-pattern>
</ruleset>
```

Then install:
```bash
composer require --dev squizlabs/php_codesniffer
composer require --dev wp-coding-standards/wpcs
```

## Summary

**Easiest Solution:**
1. Install "PHP Intelephense" extension in VSCode
2. Reload VSCode
3. Done! ✓

The warnings are cosmetic - your plugin code is correct and will work perfectly in WordPress!
