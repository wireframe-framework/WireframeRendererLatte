<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e8f210a385c0c1d8533a83df7f0529e
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wireframe\\ComposerInstaller\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wireframe\\ComposerInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/wireframe-framework/processwire-composer-installer/src/ComposerInstaller',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PW\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/hari/pw-module/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Latte\\Attributes\\TemplateFilter' => __DIR__ . '/..' . '/latte/latte/src/Latte/attributes.php',
        'Latte\\Attributes\\TemplateFunction' => __DIR__ . '/..' . '/latte/latte/src/Latte/attributes.php',
        'Latte\\Bridges\\Tracy\\BlueScreenPanel' => __DIR__ . '/..' . '/latte/latte/src/Bridges/Tracy/BlueScreenPanel.php',
        'Latte\\Bridges\\Tracy\\LattePanel' => __DIR__ . '/..' . '/latte/latte/src/Bridges/Tracy/LattePanel.php',
        'Latte\\CompileException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Compiler' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Compiler.php',
        'Latte\\Engine' => __DIR__ . '/..' . '/latte/latte/src/Latte/Engine.php',
        'Latte\\Helpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Helpers.php',
        'Latte\\HtmlNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/HtmlNode.php',
        'Latte\\ILoader' => __DIR__ . '/..' . '/latte/latte/src/compatibility.php',
        'Latte\\IMacro' => __DIR__ . '/..' . '/latte/latte/src/compatibility.php',
        'Latte\\Loader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loader.php',
        'Latte\\Loaders\\FileLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/FileLoader.php',
        'Latte\\Loaders\\StringLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/StringLoader.php',
        'Latte\\Macro' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macro.php',
        'Latte\\MacroNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroNode.php',
        'Latte\\MacroTokens' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroTokens.php',
        'Latte\\Macros\\BlockMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacros.php',
        'Latte\\Macros\\CoreMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/CoreMacros.php',
        'Latte\\Macros\\MacroSet' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/MacroSet.php',
        'Latte\\Parser' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Parser.php',
        'Latte\\PhpHelpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpHelpers.php',
        'Latte\\PhpWriter' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpWriter.php',
        'Latte\\Policy' => __DIR__ . '/..' . '/latte/latte/src/Latte/Policy.php',
        'Latte\\RegexpException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\RuntimeException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Runtime\\Block' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Block.php',
        'Latte\\Runtime\\Blueprint' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Blueprint.php',
        'Latte\\Runtime\\CachingIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/CachingIterator.php',
        'Latte\\Runtime\\Defaults' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Defaults.php',
        'Latte\\Runtime\\FilterExecutor' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterExecutor.php',
        'Latte\\Runtime\\FilterInfo' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterInfo.php',
        'Latte\\Runtime\\Filters' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Filters.php',
        'Latte\\Runtime\\Html' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Html.php',
        'Latte\\Runtime\\HtmlStringable' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/HtmlStringable.php',
        'Latte\\Runtime\\IHtmlString' => __DIR__ . '/..' . '/latte/latte/src/compatibility.php',
        'Latte\\Runtime\\ISnippetBridge' => __DIR__ . '/..' . '/latte/latte/src/compatibility.php',
        'Latte\\Runtime\\RollbackException' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/RollbackException.php',
        'Latte\\Runtime\\SnippetBridge' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/SnippetBridge.php',
        'Latte\\Runtime\\SnippetDriver' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/SnippetDriver.php',
        'Latte\\Runtime\\Template' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Template.php',
        'Latte\\Runtime\\Tracer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Tracer.php',
        'Latte\\Sandbox\\SecurityPolicy' => __DIR__ . '/..' . '/latte/latte/src/Latte/Sandbox/SecurityPolicy.php',
        'Latte\\SecurityViolationException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Strict' => __DIR__ . '/..' . '/latte/latte/src/Latte/Strict.php',
        'Latte\\Token' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Token.php',
        'Latte\\TokenIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/TokenIterator.php',
        'Latte\\Tokenizer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Tokenizer.php',
        'Latte\\Tools\\Linter' => __DIR__ . '/..' . '/latte/latte/src/Tools/Linter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e8f210a385c0c1d8533a83df7f0529e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e8f210a385c0c1d8533a83df7f0529e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8e8f210a385c0c1d8533a83df7f0529e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8e8f210a385c0c1d8533a83df7f0529e::$classMap;

        }, null, ClassLoader::class);
    }
}