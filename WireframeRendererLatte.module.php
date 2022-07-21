<?php

namespace ProcessWire;

/**
 * Wireframe Renderer Latte
 *
 * @version 0.0.1
 * @author Teppo Koivula <teppo@wireframe-framework.com>
 * @license Mozilla Public License v2.0 https://mozilla.org/MPL/2.0/
 */
class WireframeRendererLatte extends Wire implements Module {

    /**
     * Latte Engine
     *
     * @var \Latte\Engine
     */
    protected $latte;

    /**
     * View file extension
     *
     * @var string
     */
    protected $ext = 'latte';

    /**
     * Init method
     *
     * If you want to override any of the parameters passed to Latte Engine, you can do this by
     * providing 'latte' array via the settings parameter:
     *
     * ```
     * $wireframe->setRenderer($modules->get('WireframeRendererLatte')->init([
     *     'latte' => [
     *         'tempDirectory' => '/your/custom/cache/path',
     *     ],
     * ]))
     * ```
     *
     * @param array $settings Additional settings (optional).
     * @return WireframeRendererLatte Self-reference.
     */
    public function ___init(array $settings = []): WireframeRendererLatte {

        // optionally override the default file extension
        if (!empty($settings['ext'])) {
            $this->ext = $settings['ext'];
        }

        // autoload Latte classes
        if (!class_exists('\Latte\Engine')) {
            require_once(__DIR__ . '/vendor/autoload.php' /*NoCompile*/);
        }

        // init Latte Engine
        $this->latte = $this->initLatte($settings['latte'] ?? []);

        return $this;
    }

    /**
     * Init Latte
     *
     * @param array $settings Latte settings
     * @return \Latte\Engine
     */
    public function ___initLatte(array $settings = []): \Latte\Engine {
		$settings = array_merge([
            'tempDirectory' => $this->wire('config')->paths->cache . '/WireframeRendererLatte',
			'baseDir' => rtrim($this->wire('config')->paths->templates . '', '/'),
        ], $settings);
		require_once __DIR__ . '/bin/FileLoaderWireframe.php';
		$wireframe = $this->wire('modules')->get('Wireframe');
		$loader = new \Latte\Loaders\FileLoaderWireframe($settings['baseDir']);
		foreach ($wireframe->getViewPaths() as $type => $path) {
			$loader->addTypeBaseDir($type, rtrim($path, '/'));
		}
        $latte = new \Latte\Engine;
		$latte->setTempDirectory($settings['tempDirectory']);
		$latte->setLoader($loader);
        return $latte;
    }

    /**
     * Render method
     *
     * @param string $type Type of file to render (view, layout, partial, or component).
     * @param string $view Name of the view file to render.
     * @param array $params Params used for rendering.
     * @return string Rendered markup.
     * @throws WireException if param $type has an unexpected value.
     */
    public function render(string $type, string $view, array $params = []): string {
        if (!in_array($type, array_keys($this->wire('modules')->get('Wireframe')->getViewPaths()))) {
            throw new WireException(sprintf('Unexpected type (%s).', $type));
        }
        $out = $this->latte->renderToString('@' . $type . '/' . $view, $params);
		return $out;
    }

    /**
     * Set view file extension
     *
     * @param string $ext View file extension.
     * @return WireframeRendererLatte Self-reference.
     */
    public function setExt(string $ext): WireframeRendererLatte {
        $this->ext = $ext;
        return $this;
    }

    /**
     * Get view file extension
     *
     * @return string View file extension.
     */
    public function getExt(): string {
        return $this->ext;
    }

}
