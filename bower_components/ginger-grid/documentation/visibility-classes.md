# Visibility Classes
Ginger has a few visibility classes out of the box to help you hide or show elements based on viewport sizes. These sizes are determined by the variables set for `$medium-breakpoint` and `$small-breakpoint`.

## Available Classes
- `hide` - hide element on all viewports
- `lg-only` - only displays the element on large viewports (above `$medium-breakpoint`)
- `md-only` - only displays the element on medium viewports
- `sm-only` - only displays the element on small viewports
- `md-hide-down` - hides the element starting from the medium viewport down to the small viewport
- `md-hide` - hides the element only for medium viewports
- `sm-hide` - hides the element for small viewports

```html
<!-- Show on small only -->
<div class="sm--only">
  This appears on small viewports only
</div>

<!-- Show on medium only -->
<div class="md--only">
  This appears on medium viewports only
</div>

<!-- Show on large only -->
<div class="lg--only">
  This appears on large viewports only
</div>
```

## Visibility Helpers
Visibility classes allow you to control the `display` property. By default all classes are `display: flex`. Using these helpers you can quickly change the display property. Here is an example from `lg-only`:

```scss
// Class as seen in components/_visibility.scss

.lg-only{
  display: flex !important;
  &--block{
    display: block !important;
  }
  &--inline-block{
    display: inline-block !important;
  }
  &--inline-flex{
    display: inline-flex !important;
  }
}
```
Usage Example:

```html
<div class="lg-only--block">
  <!-- Content -->
</div>
```
