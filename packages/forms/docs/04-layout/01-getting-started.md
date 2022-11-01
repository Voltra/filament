---
title: Getting started
---

Layout component classes can be found in the `Filament\Form\Components` namespace.

They reside within the schema of your form, alongside any [fields](fields).

If you're using the layout components in a Livewire component, you can put them in the `getFormSchema()` method:

```php
protected function getFormSchema(): array
{
    return [
        // ...
    ];
}
```

If you're using them in admin panel resources or relation managers, you must put them in the `$form->schema()` method:

```php
public static function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
        ]);
}
```

Components may be created using the static `make()` method. Usually, you will then define the child component `schema()` to display inside:

```php
use Filament\Forms\Components\Grid;

Grid::make()
    ->schema([
        // ...
    ])
```

### Setting an ID

You may define an ID for the component using the `id()` method:

```php
use Filament\Forms\Components\Card;

Card::make()->id('main-card')
```

### Custom attributes

The HTML of components can be customized even further, by passing an array of `extraAttributes()`:

```php
use Filament\Forms\Components\Card;

Card::make()->extraAttributes(['class' => 'bg-gray-50'])
```

### Global settings

If you wish to change the default behaviour of a component globally, then you can call the static `configureUsing()` method inside a service provider's `boot()` method, to which you pass a Closure to modify the component using. For example, if you wish to make all card components have [2 columns](#columns) by default, you can do it like so:

```php
use Filament\Forms\Components\Card;

Card::configureUsing(function (Card $card): void {
    $card->columns(2);
});
```

Of course, you are still able to overwrite this on each field individually:

```php
use Filament\Forms\Components\Card;

Card::make()->columns(1)
```

### Saving data to relationships

You may load and save the contents of a layout component to a `HasOne`, `BelongsTo` or `MorphOne` Eloquent relationship, using the `relationship()` method:

```php
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

Fieldset::make('Metadata')
    ->relationship('metadata')
    ->schema([
        TextInput::make('title'),
        Textarea::make('description'),
        FileUpload::make('image'),
    ])
```

In this example, the `title`, `description` and `image` is automatically loaded from saved to the `metadata` relationship, and saved again when the form is submitted. If the `metadata` record does not exist, it is automatically created.

> To set this functionality up, **you must also follow the instructions set out in the [field relationships](getting-started#field-relationships) section**. If you're using the [admin panel](/docs/admin), you can skip this step.