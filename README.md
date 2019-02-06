# Buto-Plugin-BootstrapCarousel_v1

Made for Bootstrap 4.

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
    fade: false
    item:
      -
        type: p
        innerHTML: P1
      -
        type: p
        innerHTML: P2
    style: |
      .carousel{
        min-height: 300px;
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
