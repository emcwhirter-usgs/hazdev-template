<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Forms';
  $NAVIGATION = true;

  $HEAD = '
      <link rel="stylesheet" href="/theme/css/flexible-grid.css" />
      <style>
        .preview {
          border: 1px solid #eee;
          margin: 1em 0;
          padding: .25em 3rem;
        }
      </style>
  ';

  include 'template.inc.php';

}
?>

<div class="preview">
  <h2>Form Example Elements</h2>
  <form>
    <label for="input-type-text">Tell us your name, so that we can let you
      know when it is ready:
      <input id="input-type-text" name="input-type-text" type="text" />
    </label>

    <p>
      You may pick one flavor...
    </p>
    <fieldset class="usa-fieldset-inputs">
      <legend class="usa-sr-only">Ice Cream Flavors</legend>
      <ul class="usa-unstyled-list">
        <li>
          <input type="radio" name="flavor" id="flavor-vanilla"
              value="vanilla" checked="checked" />
          <label for="flavor-vanilla">Vanilla</label>
        </li>
        <li>
          <input type="radio" name="flavor" id="flavor-chocolate"
              value="chocolate" />
          <label for="flavor-chocolate">Chocolate</label>
        </li>
        <li>
          <input type="radio" name="flavor" id="flavor-strawberry"
              value="strawberry" disabled="disabled" />
          <label for="flavor-strawberry">Strawberry - Sorry, out of stock</label>
        </li>
      </ul>
    </fieldset>

    <p>
      ...and several toppings.
    </p>
    <fieldset class="usa-fieldset-inputs">
      <legend class="usa-sr-only">Ice Cream Toppings</legend>
      <ul class="usa-unstyled-list">
        <li>
          <input type="checkbox" name="topping" id="topping-sprinkles"
              value="sprinkles" checked="checked" />
          <label for="topping-sprinkles">Sprinkles</label>
        </li>
        <li>
          <input type="checkbox" name="topping" id="topping-chocolate-syrup"
              value="chocolate-syrup" />
          <label for="topping-chocolate-syrup">Chocolate Syrup</label>
        </li>
        <li>
          <input type="checkbox" name="topping" id="topping-peanuts"
              value="peanuts" disabled="disabled" />
          <label for="topping-peanuts">Peanuts - Sorry, out of stock</label>
        </li>
      </ul>
    </fieldset>

    <label>Now choose your container:
      <select class="collection-selectbox">
        <option value="waffle-cone">Waffle Cone</option>
        <option value="regular-cone">Regular Cone</option>
        <option value="users-hands">Your Hands</option>
        <option value="bowl" selected="selected">Bowl</option>
      </select>
    </label>

    <label for="input-type-textarea">Any other instructions?
      <textarea id="input-type-textarea" name="input-type-textarea"></textarea>
    </label>
  </form>

  <h2>Usage</h2>
  <pre>
&lt;form&gt;
  &lt;label for="input-type-text"&gt;Tell us your name, so that we can let you
    know when it is ready:
    &lt;input id="input-type-text" name="input-type-text" type="text" /&gt;
  &lt;/label&gt;

  &lt;p&gt;
    You may pick one flavor...
  &lt;/p&gt;
  &lt;fieldset class="usa-fieldset-inputs"&gt;
    &lt;legend class="usa-sr-only"&gt;Ice Cream Flavors&lt;/legend&gt;
    &lt;ul class="usa-unstyled-list"&gt;
      &lt;li&gt;
        &lt;input type="radio" name="flavor" id="flavor-vanilla"
            value="vanilla" checked="checked" /&gt;
        &lt;label for="flavor-vanilla"&gt;Vanilla&lt;/label&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;input type="radio" name="flavor" id="flavor-chocolate"
            value="chocolate" /&gt;
        &lt;label for="flavor-chocolate"&gt;Chocolate&lt;/label&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;input type="radio" name="flavor" id="flavor-strawberry"
            value="strawberry" disabled="disabled" /&gt;
        &lt;label for="flavor-strawberry"&gt;Strawberry - Sorry, out of stock&lt;/label&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/fieldset&gt;

  &lt;p&gt;
    ...and several toppings.
  &lt;/p&gt;
  &lt;fieldset class="usa-fieldset-inputs"&gt;
    &lt;legend class="usa-sr-only"&gt;Ice Cream Toppings&lt;/legend&gt;
    &lt;ul class="usa-unstyled-list"&gt;
      &lt;li&gt;
        &lt;input type="checkbox" name="topping" id="topping-sprinkles"
            value="sprinkles" checked="checked" /&gt;
        &lt;label for="topping-sprinkles"&gt;Sprinkles&lt;/label&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;input type="checkbox" name="topping" id="topping-chocolate-syrup"
            value="chocolate-syrup" /&gt;
        &lt;label for="topping-chocolate-syrup"&gt;Chocolate Syrup&lt;/label&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;input type="checkbox" name="topping" id="topping-peanuts"
            value="peanuts" disabled="disabled" /&gt;
        &lt;label for="topping-peanuts"&gt;Peanuts - Sorry, out of stock&lt;/label&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/fieldset&gt;

  &lt;label&gt;Now choose your container:
    &lt;select class="collection-selectbox"&gt;
      &lt;option value="waffle-cone"&gt;Waffle Cone&lt;/option&gt;
      &lt;option value="regular-cone"&gt;Regular Cone&lt;/option&gt;
      &lt;option value="users-hands"&gt;Your Hands&lt;/option&gt;
      &lt;option value="bowl" selected="selected"&gt;Bowl&lt;/option&gt;
    &lt;/select&gt;
  &lt;/label&gt;

  &lt;label for="input-type-textarea"&gt;Any other instructions?
    &lt;textarea id="input-type-textarea" name="input-type-textarea"&gt;&lt;/textarea&gt;
  &lt;/label&gt;
&lt;/form&gt;
&lt;/div&gt;

&lt;div class="preview"&gt;
&lt;h2&gt;Text Input Examples&lt;/h2&gt;
&lt;p&gt;
  Text input can span single or multiple lines, and can be styled
  for success and error status.
&lt;/p&gt;
&lt;form&gt;
  &lt;label for="input-focus"&gt;Text input focused
    &lt;input class="usa-input-focus" id="input-focus"
        name="input-focus" type="text" /&gt;
  &lt;/label&gt;

  &lt;div class="usa-input-error"&gt;
    &lt;label class="usa-input-error-label" for="input-error"&gt;Text input error
      &lt;span class="usa-input-error-message" id="input-error-message"
          role="alert"&gt;Helpful error message&lt;/span&gt;
      &lt;input id="input-error" name="input-error" type="text"
          aria-describedby="input-error-message" /&gt;
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;label for="input-success"&gt;Text input success
    &lt;input class="usa-input-success" id="input-success"
        name="input-success" type="text" /&gt;
  &lt;/label&gt;
&lt;/form&gt;
  </pre>
</div>

<div class="preview">
  <h2>Text Input Examples</h2>
  <p>
    Text input can span single or multiple lines, and can be styled
    for success and error status.
  </p>
  <form>
    <label for="input-focus">Text input focused
      <input class="usa-input-focus" id="input-focus"
          name="input-focus" type="text" />
    </label>

    <div class="usa-input-error">
      <label class="usa-input-error-label" for="input-error">Text input error
        <span class="usa-input-error-message" id="input-error-message"
            role="alert">Helpful error message</span>
        <input id="input-error" name="input-error" type="text"
            aria-describedby="input-error-message" />
      </label>
    </div>

    <label for="input-success">Text input success
      <input class="usa-input-success" id="input-success"
          name="input-success" type="text" />
    </label>
  </form>

  <h2>Usage</h2>
  <pre>
&lt;form&gt;
  &lt;label for="input-focus"&gt;Text input focused
    &lt;input class="usa-input-focus" id="input-focus"
        name="input-focus" type="text" /&gt;
  &lt;/label&gt;

  &lt;div class="usa-input-error"&gt;
    &lt;label class="usa-input-error-label" for="input-error"&gt;Text input error
      &lt;span class="usa-input-error-message" id="input-error-message"
          role="alert"&gt;Helpful error message&lt;/span&gt;
      &lt;input id="input-error" name="input-error" type="text"
          aria-describedby="input-error-message" /&gt;
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;label for="input-success"&gt;Text input success
    &lt;input class="usa-input-success" id="input-success"
        name="input-success" type="text" /&gt;
  &lt;/label&gt;
&lt;/form&gt;
  </pre>
</div>

<div class="preview">
  <h2>Dropdowns</h2>
  <p>
    Dropdowns should be used when only 1 selection is allowed, and there are
    not too many options to choose from.
  </p>

  <h2>Usage</h2>
  <pre>
&lt;form&gt;
  &lt;label&gt;Dropdown label
    &lt;select class="collection-selectbox"&gt;
      &lt;option value="0"&gt;Option 1&lt;/option&gt;
      &lt;option value="1"&gt;Option 2&lt;/option&gt;
      &lt;option value="2"&gt;Option 3&lt;/option&gt;
      &lt;option value="3" selected="selected"&gt;Option 4 - default&lt;/option&gt;
    &lt;/select&gt;
  &lt;/label&gt;
&lt;/form&gt;
  </pre>
</div>

<div class="preview">
  <h2>Checkboxes</h2>
  <p>
    Checkboxes should be used when multiple selections are allowed, or
    to enable/disable a feature.
  </p>

  <h2>Usage</h2>
  <pre>
&lt;fieldset class="usa-fieldset-inputs"&gt;
  &lt;legend class="usa-sr-only"&gt;Checkboxes&lt;/legend&gt;
  &lt;ul class="usa-unstyled-list"&gt;
    &lt;li&gt;
      &lt;input type="checkbox" id="checkbox-1"
          value="checkbox 1" checked="checked" /&gt;
      &lt;label for="checkbox-1"&gt;Regular Checkbox 1 - checked by default&lt;/label&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;input type="checkbox" id="checkbox-2" value="checkbox 2" /&gt;
      &lt;label for="checkbox-2"&gt;Regular Checkbox 2&lt;/label&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;input type="checkbox" id="checkbox-3" value="checkbox 3" /&gt;
      &lt;label for="checkbox-3"&gt;Regular Checkbox 3&lt;/label&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;input type="checkbox" id="checkbox-4"
          value="checkbox 4" disabled="disabled" /&gt;
      &lt;label for="checkbox-4"&gt;Regular Checkbox 4 - disabled&lt;/label&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/fieldset&gt;
  </pre>
</div>

<div class="preview">
  <h2>Radio Buttons</h2>
  <p>
    Radio buttons should be used when only 1 selection is allowed.
  </p>

  <h2>Usage</h2>
  <pre>
&lt;fieldset class="usa-fieldset-inputs"&gt;
  &lt;legend class="usa-sr-only"&gt;Radio Buttons&lt;/legend&gt;
  &lt;ul class="usa-unstyled-list"&gt;
    &lt;li&gt;
      &lt;input type="radio" name="radios" id="radio-1"
          value="radio 1" checked="checked" /&gt;
      &lt;label for="radio-1"&gt;Regular Radio 1 - selected by default&lt;/label&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;input type="radio" name="radios" id="radio-2" value="radio 2" /&gt;
      &lt;label for="radio-2"&gt;Regular Radio 2&lt;/label&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;input type="radio" name="radios" id="radio-3"
          value="radio 3" disabled="disabled"/&gt;
      &lt;label for="radio-3"&gt;Regular Radio 3 - disabled&lt;/label&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/fieldset&gt;
  </pre>
</div>
