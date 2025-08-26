#--app--
## Class: \Utphpcore\Commands\Clear
### Functions
```
function __construct()
```
## Class: \Utphpcore\Commands\Map
### Functions
```
function __construct(\Utphpcore\IO\Directory $directory)
```
## Class: \Utphpcore\Commands\Readme
### Functions
```
function __construct(\Utphpcore\IO\Directory $directory)
```
## Class: \Utphpcore\Core
### Functions
```
function __construct(\Closure $cb)
```
```
public function physicalToRelativePath(string $path): string
```
```
public function redirect(?string $url = null): void
```
```
public static function MainMenu(bool $update): void
```
```
public static function initialize(): void
```
```
public static function logout(): void
```
```
public static function register_shutdown_body(string $key, \Closure $callback)
```
```
public static function shutdown(): void
```
## Class: \Utphpcore\Core\AuthenticationToken
### Functions
```
function __construct(int $userId, array $instanceIds, bool $isAdministrator)
```
```
public function isAdministrator(): bool
```
```
public function isAuthenticated(): bool
```
```
public function userId(): int
```
## Class: \Utphpcore\Core\Messages
### Extends
Class: [\Utphpcore\Data\Stack](#class-utphpcoredatastack)

### Functions
```
public function push(mixed $data): void
```
## Class: \Utphpcore\Core\Modalresult
### Functions
```
public function __construct(bool $success, string $message)
```
```
public function __toString(): string
```
```
public function reload(): void
```
## Class: \Utphpcore\Data\AssetManager
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
## Enum: \Utphpcore\Data\AssetTypes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\Data\Cache
### Functions
```
public  static function getclear(string $key): mixed
```
```
public static function all(CacheTypes $cache): mixed
```
```
public static function clear(CacheTypes $cache, string $key): bool
```
```
public static function create(CacheTypes $cache, string $key, \Closure $callback): void
```
```
public static function get(string $key): mixed
```
```
public static function set(CacheTypes $cache, string $key, mixed $mValue): void
```
## Enum: \Utphpcore\Data\CacheTypes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\Data\Collections\Dictionary
### Implements
Interface: [\Utphpcore\Data\Collections\IDictionary](#interface-utphpcoredatacollectionsidictionary)
Unknown: [\ArrayAccess](#unknown-arrayaccess)

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
public function offsetExists(mixed $index): bool
```
```
public function offsetGet(mixed $index): mixed
```
```
public function offsetSet(mixed $index, mixed $value): void
```
```
public function offsetUnset(mixed $index): void
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
public static function fromArray(array $kvp): IDictionary
```
## Trait: \Utphpcore\Data\Collections\Enum\TInfo
### Functions
```
public function value()
```
```
public static function fromString(string $name): mixed
```
```
public static function inverseList(): array
```
```
public static function list(): array
```
```
public static function names(): array
```
```
public static function values(): array
```
## Interface: \Utphpcore\Data\Collections\IDictionary
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
public static function fromArray(array $kvp): IDictionary
```
## Interface: \Utphpcore\Data\Collections\ILinq
### Functions
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
public function groupBy(\Closure $lambda): ILinq
```
```
public function orderBy(\Closure $lambda = null, SortDirections $direction = SortDirections::Asc): ILinq
```
```
public function search(array $needle): ?int
```
```
public function select(\Closure $lambda): ILinq
```
```
public function skip(int $count): ILinq
```
```
public function sum(\Closure $lambda = null): ILinq
```
```
public function toArray(\Closure $lambda = null): array
```
```
public function where(\Closure $lambda): ILinq
```
## Class: \Utphpcore\Data\Collections\KeyValuePair
### Extends
Class: [\Utphpcore\Data\Collections\Dictionary](#class-utphpcoredatacollectionsdictionary)

### Functions
```
public static function fromArray(array $kvp): IDictionary
```
## Class: \Utphpcore\Data\Collections\Linq
### Implements
Interface: [\Utphpcore\Data\Collections\ILinq](#interface-utphpcoredatacollectionsilinq)

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
## Enum: \Utphpcore\Data\Collections\SortDirections
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\Data\Configuration
### Functions
```
function __construct(\Utphpcore\Core $core)
```
```
public function get(string $path, string $seperator = '/'): mixed
```
## Class: \Utphpcore\Data\Exceptions\IOException
### Extends
Unknown: [\Exception](#unknown-exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```
## Class: \Utphpcore\Data\Exceptions\NotImplementedException
### Extends
Unknown: [\Exception](#unknown-exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```
## Class: \Utphpcore\Data\Exceptions\UnexpectedValueException
### Extends
Unknown: [\Exception](#unknown-exception)

### Functions
```
public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
```
## Class: \Utphpcore\Data\Raw
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
## Class: \Utphpcore\Data\Route
### Functions
```
public function __construct(string $match, string $target, array $parameters, RoutingModes $mode, array $queryString)
```
```
public function file(): ?\Utphpcore\IO\File
```
```
public function match(): array
```
```
public function mode(): RoutingModes
```
```
public function parameters(): array
```
```
public function queryString(): array
```
```
public function route(): array
```
```
public function target(): array
```
## Class: \Utphpcore\Data\Router
### Functions
```
public function __construct(string $default)
```
```
public function defaultRoute(): string
```
```
public function match(): ?Route
```
```
public function register(string $route, string $target, string $mode): void
```
```
public function slug(): string
```
## Enum: \Utphpcore\Data\RoutingModes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\Data\Stack
### Functions
```
public function isEmpty(): bool
```
```
public function pop(): mixed
```
```
public function push(mixed $data): void
```
## Class: \Utphpcore\Data\Version
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
## Class: \Utphpcore\Debugging
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
public static function trace(GUI\NoHtml\Xhtml $container = null): void
```
## Class: \Utphpcore\GUI\NoHTML\Attributes
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
## Enum: \Utphpcore\GUI\NoHTML\Materialize\Columns
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Enum: \Utphpcore\GUI\NoHtml\Clearmodes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\FontAwesome\Icon
### Functions
```
public function __construct(\Utphpcore\GUI\NoHtml\IXhtml $container, string $icon)
```
## Interface: \Utphpcore\GUI\NoHtml\IXhtml
### Functions
```
public function __construct()
```
```
public function __toString(): string
```
```
public function add(string $tag, \Closure $callback=null): Xhtml
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
public function clear(Clearmodes $mode = Clearmodes::Both): void
```
```
public function get(string $path, \Closure $callback = null): array
```
```
public function text(string $text): void
```
## Enum: \Utphpcore\GUI\NoHtml\Materialize\Alignment
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\Materialize\Card
### Functions
```
function __construct(\Utphpcore\GUI\NoHtml\Xhtml $container, string $title, string $description, \Utphpcore\Data\Collections\KeyValuePair $links)
```
## Class: \Utphpcore\GUI\NoHtml\Materialize\Color
### Functions
```
function __construct(Colors $color, ColorOffsets $offset = null)
```
```
function __toString(): string
```
## Enum: \Utphpcore\GUI\NoHtml\Materialize\ColorOffsets
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Enum: \Utphpcore\GUI\NoHtml\Materialize\Colors
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\Materialize\FloatingActionButton
### Functions
```
function __construct(Icon\Icons $icon, Color $color)
```
```
public function link(string $url, Icon\Icons $icon, Color $color, string $tooltip = null, string $target = null): void
```
```
public function render(\Utphpcore\GUI\NoHtml\Xhtml $container = null, $class = null, array $jsArguments = []): void
```
## Class: \Utphpcore\GUI\NoHtml\Materialize\Form
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
public function fieldset(string $text, \Closure $callback): void
```
```
public function reference(): \Utphpcore\GUI\NoHtml\Xhtml
```
```
public function submit(string $text, \Closure $optionsCb = null): \Utphpcore\GUI\NoHtml\Xhtml
```
## Enum: \Utphpcore\GUI\NoHtml\Materialize\Form\InputTypes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Enum: \Utphpcore\GUI\NoHtml\Materialize\Form\Methods
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\Materialize\Form\Options
### Functions
```
protected function __construct()
```
```
public function align(\Utphpcore\GUI\NoHtml\Materialize\Alignment $alignment = null): \Utphpcore\GUI\NoHtml\Materialize\Alignment
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
## Class: \Utphpcore\GUI\NoHtml\Materialize\Form\SelectOptions
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
## Class: \Utphpcore\GUI\NoHtml\Materialize\Icon
### Functions
```
function __construct(\Utphpcore\GUI\NoHtml\IXhtml $container, Icon\Icons $icon, Alignment $alignment = Alignment::None, Icon\Sizes $size = Icon\Sizes::Tiny)
```
## Enum: \Utphpcore\GUI\NoHtml\Materialize\Icon\Icons
## Enum: \Utphpcore\GUI\NoHtml\Materialize\Icon\Sizes
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\Materialize\Navigation
### Extends
Class: [\Utphpcore\GUI\NoHtml\Materialize\Submenu](#class-utphpcoreguinohtmlmaterializesubmenu)

### Functions
```
public function __construct()
```
```
public function navBar(\Utphpcore\GUI\NoHtml\IXhtml $container, Color $color, string $title): void
```
```
public function submenu(string $text, \Closure $callback): void
```
## Class: \Utphpcore\GUI\NoHtml\Materialize\Submenu
### Functions
```
public function __construct()
```
```
public function link(string $text, string $link, string $target=null): void
```
```
public function modal(string $text, string $link): void
```
```
public function seperator(): void
```
```
public function toArray(): array
```
## Class: \Utphpcore\GUI\NoHtml\Materialize\Tooltip
### Functions
```
function __construct(\Utphpcore\GUI\NoHtml\Xhtml $container, string $text, Tooltip\Positions $position = Tooltip\Positions::Bottom)
```
## Enum: \Utphpcore\GUI\NoHtml\Materialize\Tooltip\Positions
### Uses
Trait: [\Utphpcore\Data\Collections\Enum\TInfo](#trait-utphpcoredatacollectionsenumtinfo)

## Class: \Utphpcore\GUI\NoHtml\Xhtml
### Implements
Interface: [\Utphpcore\GUI\NoHtml\IXhtml](#interface-utphpcoreguinohtmlixhtml)

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
public function clear(Clearmodes $mode = Clearmodes::Both): void
```
```
public function get(string $path, \Closure $callback = null): array
```
```
public function javascript(): Xhtml
```
```
public function parent(): ?Xhtml
```
```
public function text(string $text): void
```
## Class: \Utphpcore\GUI\ToDo
### Functions
```
function __construct(string ...$arguments)
```
## Class: \Utphpcore\IO\Common\Dtd
### Extends
Class: [\Utphpcore\IO\File](#class-utphpcoreiofile)

### Implements
Interface: [\Utphpcore\IO\Common\IDtdFile](#interface-utphpcoreiocommonidtdfile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function systemId(): ?string
```
## Interface: \Utphpcore\IO\Common\IDtdFile
### Extends
Interface: [\Utphpcore\IO\IFile](#interface-utphpcoreioifile)

### Functions
```
public function systemId(): ?string
```
## Interface: \Utphpcore\IO\Common\IIniFile
### Extends
Interface: [\Utphpcore\IO\IFile](#interface-utphpcoreioifile)

### Functions
```
public function parse(bool $sections = true): array
```
## Interface: \Utphpcore\IO\Common\IXmlFile
### Extends
Interface: [\Utphpcore\IO\IFile](#interface-utphpcoreioifile)

### Functions
```
public function document(): ?\Utphpcore\IO\Xml\IXmlDocument
```
## Class: \Utphpcore\IO\Common\Ini
### Extends
Class: [\Utphpcore\IO\File](#class-utphpcoreiofile)

### Implements
Interface: [\Utphpcore\IO\Common\IIniFile](#interface-utphpcoreiocommoniinifile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function parse(bool $sections = true): array
```
## Class: \Utphpcore\IO\Common\Xml
### Extends
Class: [\Utphpcore\IO\File](#class-utphpcoreiofile)

### Implements
Interface: [\Utphpcore\IO\Common\IXmlFile](#interface-utphpcoreiocommonixmlfile)

### Functions
```
public function __construct(string $path, bool $requiresExtension = true)
```
```
public function document(): ?\Utphpcore\IO\Xml\IXmlDocument
```
## Class: \Utphpcore\IO\Data\Db\Database
### Extends
Class: [\Utphpcore\Data\Raw](#class-utphpcoredataraw)

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
## Class: \Utphpcore\IO\Directory
### Implements
Interface: [\Utphpcore\IO\IDirectory](#interface-utphpcoreioidirectory)

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
## Class: \Utphpcore\IO\File
### Implements
Interface: [\Utphpcore\IO\IFile](#interface-utphpcoreioifile)

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
## Interface: \Utphpcore\IO\IDirectory
### Extends
Interface: [\Utphpcore\IO\IDiskManager](#interface-utphpcoreioidiskmanager)

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
public function list(string $sRegex = null, bool $bRefresh = false): array
```
```
public function open(): bool
```
```
public function parent(): Directory
```
```
public function read(?string &$sOut): bool
```
## Interface: \Utphpcore\IO\IDiskManager
### Functions
```
public function exists(): bool
```
```
public function name(): string
```
```
public function path(): string
```
```
public function remove(): bool
```
## Interface: \Utphpcore\IO\IFile
### Extends
Interface: [\Utphpcore\IO\IDiskManager](#interface-utphpcoreioidiskmanager)

### Functions
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
public function parent(): ?IDirectory
```
```
public function read(): string
```
```
public function relativeTo(IDirectory $oDir): ?string
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
## Class: \Utphpcore\IO\Xml\Doctype
### Implements
Interface: [\Utphpcore\IO\Xml\IXmlDoctype](#interface-utphpcoreioxmlixmldoctype)

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
## Class: \Utphpcore\IO\Xml\Document
### Extends
Class: [\Utphpcore\IO\Xml\Element](#class-utphpcoreioxmlelement)

### Implements
Interface: [\Utphpcore\IO\Xml\IXmlDocument](#interface-utphpcoreioxmlixmldocument)

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
## Class: \Utphpcore\IO\Xml\Element
### Implements
Interface: [\Utphpcore\IO\Xml\IXmlElement](#interface-utphpcoreioxmlixmlelement)

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
## Interface: \Utphpcore\IO\Xml\IXmlDoctype
### Functions
```
public function __toString(): string
```
```
public function attributes(): array
```
## Interface: \Utphpcore\IO\Xml\IXmlDocument
### Extends
Interface: [\Utphpcore\IO\Xml\IXmlElement](#interface-utphpcoreioxmlixmlelement)

### Functions
```
public function __toString(): string
```
```
public function asElement(): IXmlElement
```
```
public function closed(bool $value = null): ?bool
```
```
public function doctype(): IXmlDoctype
```
```
public function validateDtd(\Utphpcore\IO\Common\IDtdFile $dtdSchemaFile, string $root, bool $output = true, string $encoding = 'utf-8'): bool
```
```
public function validateDtdStream(string $stream, string $root, bool $output = true, string $encoding = 'utf-8'): bool
```
```
public function validateXsd(\Utphpcore\IO\IFile $xsdSchemaFile, bool $output = true): bool
```
```
public function validateXsdStream(string $stream, bool $output = true): bool
```
## Interface: \Utphpcore\IO\Xml\IXmlElement
### Functions
```
public function __clone(): void
```
```
public function __toString(): string
```
```
public function addChild(IXmlElement $element): bool
```
```
public function asArray(): array
```
```
public function attributes(array $list = null): array
```
```
public function children(): array
```
```
public function createChild(string $name): ?IXmlElement
```
```
public function id(): string
```
```
public function name(): string
```
```
public function parent(?string $value = null): string
```
```
public function remove(IXmlElement $element): bool
```
```
public function search(string $regex, int $returnIndex = null, string $type = self::SEARCH_NAME, $recursive = true, $recursivePos = 0): ?array
```
```
public function text(string $text = null): ?string
```
```
public function updatePosition(int $pos): void
```
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer
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
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\ClassAnalyzer
### Uses
Trait: [\Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics](#trait-utphpcoresourceanalyzersphpanalyzertbasics)

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
public function namespace(): ?string
```
```
public function uses(): array
```
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\EnumAnalyzer
### Uses
Trait: [\Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics](#trait-utphpcoresourceanalyzersphpanalyzertbasics)

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
public function namespace(): ?string
```
```
public function uses(): array
```
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\FunctionAnalyzer
### Uses
Trait: [\Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics](#trait-utphpcoresourceanalyzersphpanalyzertbasics)

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
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\InterfaceAnalyzer
### Uses
Trait: [\Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics](#trait-utphpcoresourceanalyzersphpanalyzertbasics)

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
public function name(): ?string
```
```
public function namespace(): ?string
```
## Trait: \Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics
### Functions
```
public function body(array $tokens, string $namespace): array
```
```
public function header(array $tokens, string $namespace): array
```
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\Tokens
### Functions
```
public static function getToken(int $value): ?string
```
## Class: \Utphpcore\Source\Analyzers\PhpAnalyzer\TraitAnalyzer
### Uses
Trait: [\Utphpcore\Source\Analyzers\PhpAnalyzer\TBasics](#trait-utphpcoresourceanalyzersphpanalyzertbasics)

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
public function name(): ?string
```
```
public function namespace(): ?string
```
