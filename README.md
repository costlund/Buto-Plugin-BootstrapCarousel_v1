# Buto-Plugin-BootstrapCarousel_v1

Made for Bootstrap 4.

Param controls, indicators, style is optional. Param id and item are not.

```
type: widget
data:
  plugin: bootstrap/carousel_v1
  method: carousel
  data:
    id: my_carousel
    controls: false
    indicators: false
    style: |
      .carousel{
        background:blue;
        min-height: 300px;
      }
      .carousel-item{
        background:green;
      }
    item:
      -
        type: p
        innerHTML: P1
      -
        type: p
        innerHTML: P2
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
