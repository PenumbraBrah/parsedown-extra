## Raindown ##
An extension of [Parsedown Extra](https://github.com/erusev/parsedown-extra) that adds json metadata.

[See Demo](broken link)

### Installation

Include `Parsedown.php` and `ParsedownExtra.php` and `Raindown.php`.

### Example

``` php
$make_it_rain = new Raindown();
$data_to_parse = '{"id": "9", "status": "stormy"}<raindown># Weather Report #
* Caution.
* Advisory: bring a jacket.';

# To return content:
echo $make_it_rain->content($data_to_parse);
# prints:
# <h1 class="sth">Weather Report</h1>
# <ul>
#   <li>Caution.</li>
#   <li>Advisory: bring a jacket.</li>
# </ul>

# Or to return metadata:
echo $make_it_rain->meta($data_to_parse)->{'id'}; # prints '9'

# To return everything at once:
list($my_metadata, $parsed_content) = $make_it_rain->storm($data_to_parse);
echo $my_meta->{'id'}; # prints '9'
echo $parsed_content;
# prints:
# <h1 class="sth">Weather Report</h1>
# <ul>
#   <li>Caution.</li>
#   <li>Advisory: bring a jacket.</li>
# </ul>
```
