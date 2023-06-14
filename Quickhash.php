<?php
class QuickHashIntSet {
/* 常量 */
const int CHECK_FOR_DUPES = 1;
const int DO_NOT_USE_ZEND_ALLOC = 2;
const int HASHER_NO_HASH = 256;
const int HASHER_JENKINS1 = 512;
const int HASHER_JENKINS2 = 1024;
/* 方法 */
public add(int $key): bool
public __construct(int $size, int $options = ?)
public delete(int $key): bool
public exists(int $key): bool
publicgetSize(): int
public static loadFromFile(string $filename, int $size = ?, int $options = ?): QuickHashIntSet
public static loadFromString(string $contents, int $size = ?, int $options = ?): QuickHashIntSet
public saveToFile(string $filename): void
public saveToString(): string
}
