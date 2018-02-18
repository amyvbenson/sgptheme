# Icons

Uses an inline SVG sprite generated using Icomoon - https://icomoon.io/app/

TO DO: see if using an external svg sprite would be better.

### Updating the icon set

1. Upload `sgptheme/images/icons/selection.json` to Icomoon.
2. Add or remove icons
3. Download the new icon set
4. Rename the new `symbol-defs.svg` to `symbol-defs.svg.php`
5. Replace the existing `selection.json` and `symbol-defs.svg.php` in `sgptheme/images/icons` with the new versions

### Using icons

Pass in the icon name and (optionally) screen-reader only text.

```
<?php echo svg_icon('menu', 'Menu') ?>
```
