#--app--
## Utphpcore\Debugging
### Functions
```
public static function dump(mixed ...$arguments): ?string
```
```
public static function errorHandler(int $errno, string $errstr, string $errfile, int $errline): void
```
```
public static function exceptionHandler(\Throwable $ex): void
```
```
public static function trace(): void
```

## Utphpcore\IO\File
### Functions
```
protected function __construct(string $sPath)
```
```
public function asDtd(): ?Common\IDtdFile
```
```
public function asIni(): ?Common\IIniFile
```
```
public function asXml(): ?Common\IXmlFile
```
```
public function basename(): string
```
```
public function copyTo(IDirectory $oDir, string $sName = null): bool
```
```
public function exists(): bool
```
```
public function extension(): string
```
```
public function fClose(): bool
```
```
public function fOpen(string $mode, bool $useIncludePath = false, $context = null): bool
```
```
public function fRead(int $length): ?string
```
```
public function fWrite(string $content): mixed
```
```
public function forceDownload(string $name): void
```
```
public function name(): string
```
```
public function parent(): ?IDirectory
```
```
public function path(): string
```
```
public function read(): string
```
```
public function relativeTo(IDirectory $oDir): ?string
```
```
public function remove(): bool
```
```
public function size(): int
```
```
public function write(string $sStream, bool $bCreateDirectory = true): void
```
```
public static function fromDirectory(IDirectory $oDir, string $sName): ?IFile
```
```
public static function fromFile(IFile $oFile): IFile
```
```
public static function fromString(string $sPath): IFile
```

## Utphpcore\IO\Directory
### Functions
```
public function close(): void
```
```
public function contains(string $sRegex): bool
```
```
public function copyTo(IDirectory $oDirectory): void
```
```
public function create(): bool
```
```
public function exists(): bool
```
```
public function list(string $sRegex = null, bool $bRefresh = false): array
```
```
public function name(): string
```
```
public function open(): bool
```
```
public function parent(): Directory
```
```
public function path(): string
```
```
public function read(?string &$out): bool
```
```
public function remove(): bool
```
```
public static function fromDirectory(IDirectory $oDir, string $sName): ?Directory
```
```
public static function fromString(string $sDir): Directory
```

## Utphpcore\IO\Data\Db\Database
### Extends
[\Utphpcore\Data\Raw](#utphpcoredataraw)

### Functions
```
public function beginTransaction(): void
```
```
public function bind(string $sTarget, mixed $mValue): void
```
```
public function commit(): void
```
```
public function database(): string
```
```
public function execute(\Utphpcore\Data\CacheTypes $cache = \Utphpcore\Data\CacheTypes::Memory, bool $noDb = false): array
```
```
public function query(string $sQuery): void
```
```
public function rollback(): void
```
```
public function structure(string $baseSql, \Utphpcore\Data\CacheTypes $cache = \Utphpcore\Data\CacheTypes::Memory, bool $noDb = false): array
```
```
public static function createInstance(string $sInstanceID, string $sHost, string $sUsername, ?string $sPassword, string $sDatabase): Database
```
```
public static function getInstance(mixed $mInstanceID = null): ?Database
```

## Utphpcore\IO\Common\Dtd
### Extends
[\Utphpcore\IO\File](#utphpcoreiofile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function systemId(): ?string
```

## Utphpcore\IO\Common\Xml
### Extends
[\Utphpcore\IO\File](#utphpcoreiofile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function document(): ?\Utphpcore\IO\Xml\IXmlDocument
```

## Utphpcore\IO\Common\Ini
### Extends
[\Utphpcore\IO\File](#utphpcoreiofile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function parse(bool $sections = true): array
```

## Utphpcore\IO\Xml\Element
### Functions
```
final public function addChild(IXmlElement $element): bool
```
```
final public function asDocument(IXmlDoctype $doctype = null): Document
```
```
final public function attributes(array $list = null): array
```
```
final public function createChild(string $name): ?Element
```
```
final public function id(): string
```
```
final public function name(): string
```
```
final public function parent(?string $value = null): string
```
```
final public function search(string $regex, int $returnIndex = null, string $type = self::SEARCH_NAME, $recursive = true, $recursivePos = 0): ?array
```
```
final public function text(string $text = null): ?string
```
```
final public function updatePosition(int $pos): void
```
```
final public static function createFromFile(\Utphpcore\IO\Common\Xml $file, Doctype $doctype = null): Element
```
```
final public static function createFromSimpleXml(\SimpleXMLElement $element, Doctype $doctype = null): Element
```
```
final public static function createFromXml(string $xmlstring, Doctype $doctype = null): Element
```
```
public function __clone(): void
```
```
public function __construct(string $name)
```
```
public function __toString(): string
```
```
public function asArray(): array
```
```
public function children(): array
```
```
public function remove(IXmlElement $element): bool
```

## Utphpcore\IO\Xml\Document
### Extends
[\Utphpcore\IO\Xml\Element](#utphpcoreioxmlelement)

### Functions
```
final public function asElement(): IXmlElement
```
```
final public function closed(bool $value = null): ?bool
```
```
final public function doctype(): IXmlDoctype
```
```
final public function validateDtd(\Utphpcore\IO\Common\IDtdFile $dtdSchemaFile, string $root, bool $output = true, string $encoding = 'utf-8'): bool
```
```
final public function validateDtdStream(string $stream, string $root, bool $output = true, string $encoding = 'utf-8'): bool
```
```
public function __construct(string $name, IXmlDoctype $doctype = null)
```
```
public function __toString(): string
```

## Utphpcore\IO\Xml\Doctype
### Functions
```
public function __construct(string $start, string $end, array $attributes)
```
```
public function __toString(): string
```
```
public function attributes(): array
```
```
public static function html5(): Doctype
```
```
public static function htmlFrameset(): Doctype
```
```
public static function htmlStrict(): Doctype
```
```
public static function htmlTransitional(): Doctype
```
```
public static function xHtml(): Doctype
```
```
public static function xHtmlFrameset(): Doctype
```
```
public static function xHtmlStrict(): Doctype
```
```
public static function xHtmlTransitional(): Doctype
```
```
public static function xml(string $version = '1.0', string $encoding = 'utf-8', bool $standalone = true): Doctype
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\Tokens
### Functions
```
public static function getToken(int $value): ?string
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\ClassAnalyzer
### Functions
```
public function __construct(array $tokens, string $namespace)
```
```
public function extends(): ?string
```
```
public function functions(): array
```
```
public function implements(): array
```
```
public function name(): ?string
```
```
public function uses(): array
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\EnumAnalyzer
### Functions
```
public function __construct(array $tokens, string $namespace)
```
```
public function extends(): ?string
```
```
public function name(): ?string
```
```
public function uses(): array
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\InterfaceAnalyzer
### Functions
```
public function __construct(array $tokens, string $namespace)
```
```
public function extends(): ?string
```
```
public function name(): ?string
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\TraitAnalyzer
### Functions
```
public function __construct(array $tokens, string $namespace)
```
```
public function extends(): ?string
```
```
public function name(): ?string
```

## Utphpcore\Source\Analyzers\PhpAnalyzer\FunctionAnalyzer
### Functions
```
public function __construct(array $tokens, string $namespace)
```
```
public function isPrivate(): bool
```
```
public function name(): ?string
```
```
public function raw(): ?string
```

## Utphpcore\Source\Analyzers\PhpAnalyzer
### Functions
```
public function __construct(\Utphpcore\IO\File $file)
```
```
public function classes(): array
```
```
public function enums(): array
```
```
public function interfaces(): array
```
```
public function namespace(): ?string
```
```
public function traits(): array
```

## Utphpcore\GUI\NoHtml\Xhtml
### Functions
```
public function __construct(string $prefix = null)
```
```
public function __toString(): string
```
```
public function add(string $tag, \Closure $callback=null, bool $short = false): Xhtml
```
```
public function append(mixed $content): void
```
```
public function attributes(): Attributes
```
```
public function children(): array
```
```
public function clear(): void
```
```
public function get(string $path, \Closure $callback): void
```
```
public function parent(): ?Xhtml
```
```
public function text(string $text): void
```

## Utphpcore\GUI\NoHTML\Attributes
### Functions
```
public function __construct()
```
```
public function __toString(): string
```
```
public function clear(): void
```
```
public function count(): int
```
```
public function get(string $name): ?string
```
```
public function set(string $name, string $value): void
```

## Utphpcore\GUI\NoHtml\FontAwesome\Icon
### Functions
```
public function __construct(\Utphpcore\GUI\NoHtml\IXhtml $container, string $icon)
```

## Utphpcore\GUI\NoHtml\Materialize\Form\Options
### Functions
```
protected function __construct()
```
```
public function max(?int $value=null, bool $clear = false): ?int
```
```
public function min(?int $value = null, bool $clear = false): ?int
```
```
public function offset(\Utphpcore\GUI\NoHtml\Materialize\Columns $value = null, bool $clear = false): ?\Utphpcore\GUI\NoHtml\Materialize\Columns
```
```
public function options(?SelectOptions $value = null, bool $clear = false): ?SelectOptions
```
```
public function size(\Utphpcore\GUI\NoHtml\Materialize\Columns $value = null): \Utphpcore\GUI\NoHtml\Materialize\Columns
```
```
public function step(?float $value=null, bool $clear = false): ?float
```
```
public static function Default(): Options
```

## Utphpcore\GUI\NoHtml\Materialize\Form\SelectOptions
### Functions
```
public function __construct()
```
```
public function data(): array
```
```
public function set(string $text, string $value, bool $isSelected): void
```

## Utphpcore\GUI\NoHtml\Materialize\Form
### Functions
```
public function __construct(\Utphpcore\GUI\NoHtml\Xhtml $container, Form\Methods $method, \Closure $optionsCb = null)
```
```
public function button(string $text, string $action, \Closure $optionsCb = null): ?\Utphpcore\GUI\NoHtml\Xhtml
```
```
public function field(string $id, string $text, Form\InputTypes $type, mixed $value, bool $required, \Closure $optionsCb = null): \Utphpcore\GUI\NoHtml\Xhtml
```
```
public function reference(): \Utphpcore\GUI\NoHtml\Xhtml
```
```
public function submit(string $text, \Closure $optionsCb = null): \Utphpcore\GUI\NoHtml\Xhtml
```

## Utphpcore\GUI\NoHtml\Materialize\Icon
### Functions
```
function __construct(\Utphpcore\GUI\NoHtml\IXhtml $container, string $icon)
```

## Utphpcore\GUI\NoHtml\Materialize\Navigation
### Extends
[\Utphpcore\GUI\NoHtml\Materialize\Submenu](#utphpcoreguinohtmlmaterializesubmenu)

### Functions
```
public function __construct()
```
```
public function navBar(\Utphpcore\GUI\NoHtml\IXhtml $container): void
```
```
public function submenu(string $text, \Closure $callback): void
```

## Utphpcore\GUI\NoHtml\Materialize\Submenu
### Functions
```
public function __construct()
```
```
public function link(string $text, string $link, string $target=null): void
```
```
public function seperator(): void
```
```
public function toArray(): array
```

## Utphpcore\Core
### Functions
```
function __construct(\Closure $cb)
```
```
public function get(int $property): mixed
```
```
public function physicalToRelativePath(string $path): string
```
```
public function redirect(?string $url = null): void
```
```
public function set(int $property, mixed $value)
```
```
public static function initialize(): void
```
```
public static function shutdown(): void
```

## Utphpcore\Data\Version
### Functions
```
public function __construct(string $name, int $build, int $major, int $minor, int $revision, ?string $url = null)
```
```
public function __toString(): string
```
```
public function add(Version $version): void
```
```
public function clear(): void
```
```
public function render(\Utphpcore\GUI\NoHtml\Xhtml $container): void
```
```
public function update(string $name, int $build, int $major, int $minor, int $revision, ?string $url = null): void
```

## Utphpcore\Data\Collections\Linq
### Functions
```
public function __construct(array $collection)
```
```
public function avg(\Closure $lambda = null): ILinq
```
```
public function count(): int
```
```
public function firstOrDefault(\Closure $lambda = null): mixed
```
```
public function groupBy(\Closure $lambda): Linq
```
```
public function search(array $needle): ?int
```
```
public function select(\Closure $lambda): Linq
```
```
public function skip(int $count): ILinq
```
```
public function sum(\Closure $lambda = null): ILinq
```
```
public function toArray(\Closure $lambda = null, bool $keepKeys = false): array
```
```
public function where(\Closure $lambda): Linq
```

## Utphpcore\Data\Collections\Dictionary
### Functions
```
public function add(mixed $key, mixed $value, bool $setAsArray = false): bool
```
```
public function get(mixed $key): mixed
```
```
public function keys(): array
```
```
public function remove(mixed $key): bool
```
```
public function toArray(): array
```
```
public function values(): array
```
```
public static function fromArray(array $kvp): Dictionary
```

## Utphpcore\Data\Exceptions\NotImplementedException
### Extends
[\Exception](#exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```

## Utphpcore\Data\Exceptions\UnexpectedValueException
### Extends
[\Exception](#exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```

## Utphpcore\Data\Exceptions\IOException
### Extends
[\Exception](#exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```

## Utphpcore\Data\Configuration
### Functions
```
function __construct(\Utphpcore\Core $core)
```
```
public function get(string $path, string $seperator = '/'): mixed
```

## Utphpcore\Data\AssetManager
### Functions
```
public function __construct(\Utphpcore\Core $core)
```
```
public function copyTo(\Utphpcore\IO\IFile $file, string $name, AssetTypes $to): bool
```
```
public function get(string $asset, AssetTypes $from = AssetTypes::All): ?\Utphpcore\IO\IDiskManager
```

## Utphpcore\Data\Raw
### Functions
```
protected function __construct(array $aList = null)
```
```
protected function set(string $sName, mixed $mValue): void
```
```
public function get(string $sName): mixed
```
```
public function toArray(): array
```

## Utphpcore\Data\Cache
### Functions
```
public static function all(CacheTypes $cache): mixed
```
```
public static function clear(CacheTypes $cache, string $key): bool
```
```
public static function get(CacheTypes $cache, string $key): mixed
```
```
public static function set(CacheTypes $cache, string $key, mixed $mValue): void
```

## Utphpcore\Commands\Map
### Functions
```
function __construct(\Utphpcore\IO\Directory $directory)
```

## Utphpcore\Commands\Readme
### Functions
```
function __construct(\Utphpcore\IO\Directory $directory)
```

