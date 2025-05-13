# Buto-Plugin-BootstrapCarousel_v1

<p>Made for Bootstrap 5 since september 2023.</p>
<ul>
<li><a href="https://getbootstrap.com/docs/5.0/components/carousel/">https://getbootstrap.com/docs/5.0/components/carousel/</a></li>
</ul>

<a name="key_0"></a>

## Pages



<a name="key_0_0"></a>

### page_demo



<a name="key_1"></a>

## Widgets



<a name="key_1_0"></a>

### widget_carousel

<p>Param controls, indicators, fade, style is optional. Param id and item are not.</p>
<pre><code>type: widget
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
        settings:
          _: Use enabled/disabled if needed.
          enabled: true
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
      }</code></pre>
<p>Item example.</p>
<pre><code>type: div
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
  style: 'background:gray;min-height:300px;background-image: url(''/data/theme/sit/shop/wshop/type/access_points.jpg'');background-repeat:no-repeat;background-position:center;'</code></pre>

