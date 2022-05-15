<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@PHP71Migration' => true,
        '@PHP73Migration' => true,
        '@PHP74Migration' => true,
        '@PHP80Migration' => true,
        '@PHP81Migration' => true,
        '@PHPUnit48Migration:risky' => true,
        '@PhpCsFixer' => true,
        'align_multiline_comment' => true,
        'concat_space' => ['spacing' => 'one'],
        'constant_case' => ['case' => 'lower'],
        'declare_strict_types' => false,
        'dir_constant' => true,
        'echo_tag_syntax' => ['format' => 'long'],
        'general_phpdoc_annotation_remove' => [
            'annotations' => ['author', 'package'],
        ],
        'heredoc_to_nowdoc' => true,
        'increment_style' => ['style' => 'post'],
        'fully_qualified_strict_types' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'mb_str_functions' => true,
        'modernize_types_casting' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_function_invocation' => [
            'include' => ['@internal'],
        ],
        'no_closing_tag' => true,
        'no_php4_constructor' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_trailing_whitespace' => true,
        'ordered_imports' => [
            'imports_order' => [
                'const',
                'class',
                'function',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
        'protected_to_private' => false,
        'semicolon_after_instruction' => true,
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],
        'strict_param' => true,
        'yoda_style' => [
            'always_move_variable' => false,
            'equal' => false,
            'identical' => false,
        ],
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;
