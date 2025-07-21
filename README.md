# SOLID Principles

This project demonstrates the SOLID principles of object-oriented design. Below is an explanation of each principle with examples from this codebase.

## Single Responsibility Principle (SRP)

> A class should have only one reason to change.

### Example: Feedback Class

The `Feedback` class has a single responsibility: to represent feedback data with validation rules.

```php
readonly class Feedback
{
    public int $note;
    public ?string $testimony;
    
    public function __construct(int $note, ?string $testimony) {
        if ($note < 9 && empty($testimony)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->note = $note;
        $this->testimony = $testimony;
    }
}
```

This class only changes if the representation or validation of feedback needs to change.

### Example: Service Classes

The service classes also demonstrate SRP:

- `ScoreCalculator` is only responsible for calculating scores
- `Viewer` is only responsible for watching content

## Open/Closed Principle (OCP)

> Software entities should be open for extension but closed for modification.

### Example: AluraPlus extending Video

The `Video` class is extended by `AluraPlus` without modifying the original class:

```php
class AluraPlus extends Video
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }
}
```

This allows for new behavior (category-based URLs) without changing the existing `Video` class.

### Example: Service Classes with Interfaces

The service classes are designed to work with interfaces, making them open for extension:

```php
class ScoreCalculator
{
    public function getScore(Punctuable $content): float
    {
        return $content->getScore();
    }
}
```

New types of content can be added by implementing the `Punctuable` interface, without modifying the `ScoreCalculator` class.

## Liskov Substitution Principle (LSP)

> Subtypes must be substitutable for their base types.

### Example: Video and AluraPlus

The `AluraPlus` class extends `Video` and can be used anywhere a `Video` is expected:

```php
// Both of these will work with any code expecting a Video
$video = new Video("Regular Video");
$aluraPlus = new AluraPlus("Premium Video", "Premium");

// Both can be used with the Viewer service
$viewer = new Viewer();
$viewer->watch($video);
$viewer->watch($aluraPlus);
```

Even though `AluraPlus` overrides the `getUrl()` method, it maintains the contract of the `Video` class and the `Watchable` and `Punctuable` interfaces.

## Interface Segregation Principle (ISP)

> Clients should not be forced to depend on interfaces they do not use.

### Example: Focused Interfaces

The project uses two focused interfaces instead of one general-purpose interface:

```php
interface Watchable
{
    public function watch(): void;
}

interface Punctuable
{
    public function getScore(): float;
}
```

This allows classes to implement only the interfaces they need:
- A class that can be watched but not scored would implement only `Watchable`
- A class that can be scored but not watched would implement only `Punctuable`
- Classes like `Video` and `Course` implement both because they support both behaviors

## Dependency Inversion Principle (DIP)

> High-level modules should not depend on low-level modules. Both should depend on abstractions.

### Example: Service Classes Depending on Interfaces

The service classes depend on interfaces rather than concrete implementations:

```php
class Viewer
{
    public function watch(Watchable $watchable): void
    {
        $watchable->watch();
    }
}

class ScoreCalculator
{
    public function getScore(Punctuable $content): float
    {
        return $content->getScore();
    }
}
```

This means:
1. The services can work with any class that implements the required interface
2. New implementations can be added without modifying the services
3. The services are decoupled from the specific implementations

## Conclusion

This project demonstrates all five SOLID principles through its design:

- **SRP**: Classes have single, well-defined responsibilities
- **OCP**: The system is extensible through inheritance and interfaces
- **LSP**: Subclasses can be used in place of their parent classes
- **ISP**: Interfaces are focused and specific
- **DIP**: High-level components depend on abstractions, not implementations

These principles lead to code that is more maintainable, extensible, and testable.
