module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'no-empty-source': null,
    'string-quotes': 'double',
    'indentation': 2,
    'declaration-colon-newline-after': null,
    'value-list-comma-newline-after': null,
    'rule-empty-line-before': null,
    'comment-empty-line-before': null,
    'block-closing-brace-empty-line-before': null,
    'block-opening-brace-newline-after': null,
    'no-descending-specificity': null,
    'no-missing-end-of-source-newline': null,
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
