# statamic-set-count
A statamic 2.0 modifier used to count the number of sets (by type) within a bard field.

Copy `SetCount` folder into `/site/addons/`.

## Usage

### If your data looks like this

```yaml
my_bard_field:
  - 
    type: text
    text: '<p>St. agur blue cheese bavarian bergkase boursin. Pepper jack monterey jack stinking bishop jarlsberg cheese slices lancashire melted cheese cut the cheese. Airedale cheesy grin say cheese cheeseburger dolcelatte monterey jack squirty cheese cauliflower cheese.</p>'
  - 
    type: columns
    column_1: "Rubber cheese macaroni cheese queso."
    column_2: "Everyone loves cow babybel. Ricotta brie cheese on toast."
  - 
    type: text
    text: '<p>Cheesy feet who moved my cheese manchego edam squirty cheese stinking bishop pecorino cheese and biscuits. Feta bocconcini blue castello squirty cheese.</p>'
  -
    type: pull_quote
    quote: |
      Airedale cheesy grin say cheese cheeseburger dolcelatte monterey jack squirty cheese cauliflower cheese.
    attribution: Your Mom
```


### Template

```html
There are {{ my_bard_field | set_count:text }} text sets.<br>
There are {{ my_bard_field | set_count:columns }} columns sets.<br>
There are {{ my_bard_field | set_count }} total sets.<br>
{{ if ( my_bard_field | set_count:pull_quote ) > 0 }}We've got a pull quote!{{ /if }}
```

### Outputs

```
There are 2 text sets.
There are 1 columns sets.
There are 4 total sets.
We've got a pull quote!
```

_Tasty ipsum provided by http://www.cheeseipsum.co.uk/_

## Changelog

### 1.0.1

The modifier will now work with inception Bards, and will count the number of sets regardless of how many levels deep the inception goes.
