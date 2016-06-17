# Usage

This field type returns the integer value as formatted in the database by default.

### `formatted()`

Returns the value formatted per field configuration.

    {% verbatim %}
    // Twig usage
    {{ entry.example.formatted }}
    {% endverbatim %}
    
    // API usage
    $entry->example->formatted;