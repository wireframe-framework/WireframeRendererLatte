<?php

namespace Latte\Loaders;

use Latte;

class FileLoaderWireframe extends FileLoader implements Latte\Loader {

	/** @var array */
	protected $typeBaseDirs = [];

	/**
	 * Returns template source code.
	 */
	public function getContent($fileName): string {
		if (strpos($fileName, '@') === 0 && preg_match('/^@([^\/]+)/', $fileName, $matches)) {
			$file = $this->typeBaseDirs[$matches[1]] . substr($fileName, strlen($matches[1])+2);
			if (strpos($file, "search") !== false) {
				$file = str_replace('/sites/thepohja_fi/public/site/templates/layouts/', '/sites/thepohja_fi/public/site/templates/partials/', $file);
			}
		} else {
			$file = $this->baseDir . $fileName;
		}

		if ($this->baseDir && !Latte\Helpers::startsWith($this->normalizePath($file), $this->baseDir)) {
			throw new Latte\RuntimeException("Template '$file' is not within the allowed path '{$this->baseDir}'.");

		} elseif (!is_file($file)) {
			throw new Latte\RuntimeException("Missing template file '$file'.");

		} elseif ($this->isExpired($fileName, time())) {
			if (@touch($file) === false) {
				trigger_error("File's modification time is in the future. Cannot update it: " . error_get_last()['message'], E_USER_WARNING);
			}
		}

		return file_get_contents($file);
	}

	/**
	 * Returns referred template name.
	 */
	public function getReferredName($file, $referringFile): string {
		if (is_string($referringFile) && strpos($referringFile, '@') === 0) {
			return '@partial/' . $file;
		}

		if ($this->baseDir || !preg_match('#/|\\\\|[a-z][a-z0-9+.-]*:#iA', $file)) {
			$file = $this->normalizePath($referringFile . '/../' . $file);
		}

		return $file;
	}

	/**
	 * Adds type specific base dir.
	 */
	public function addTypeBaseDir(string $type, ?string $baseDir = null) {
		$this->typeBaseDirs[$type] = $baseDir ? $this->normalizePath("$baseDir/") : null;
	}
}
