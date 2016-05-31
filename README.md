## Raindown ##
An extension of [Parsedown Extra](https://github.com/erusev/parsedown-extra) that adds json metadata.

[See Demo](broken link)

### Installation

Include `Parsedown.php` and `ParsedownExtra.php` and `Raindown.php`.

### Example

``` php
$MakeItRain = new Raindown();

echo $MakeItRain->content('{"id": "9"}<raindown># Weather Report # Bring a jacket.');
# prints: <h1 class="sth">Weather Report</h1><p>Bring a jacket.</p>
```
