# Buto-Plugin-BootstrapCarousel_v1

Made for Bootstrap 5 since september 2023.


https://getbootstrap.com/docs/4.1/components/carousel/

Param controls, indicators, fade, style is optional. Param id and item are not.

```
type: widget
data:
  plugin: bootstrap/carousel_v1
  method: carousel
  data:
    id: my_carousel
    controls: true
    indicators: true
    fade: true
    item:
      -
        type: div
        attribute:
          style: 'background:blue;min-height:300px;'
        innerHTML:
          -
            type: h1
            innerHTML: Div 1
      -
        type: div
        attribute:
          style: 'background:green;min-height:300px;'
        innerHTML:
          -
            type: h1
            innerHTML: Div 2
    style: |
      .carousel{
        min-height: 300px;
        background: silver;
      }
      .carousel-item{
      }
```

Item example.

```
type: div
innerHTML:
  -
    type: a
    innerHTML:
      -
        type: h1
        innerHTML: 'Access Points'
      -
        type: p1
        innerHTML: 'Access points of good quality.'
    attribute:
      class: carousel-caption
      href: /p/products/type/access_points/Access_Points
attribute:
  style: 'background:gray;min-height:300px;background-image: url(''/data/theme/sit/shop/wshop/type/access_points.jpg'');background-repeat:no-repeat;background-position:center;'
```
