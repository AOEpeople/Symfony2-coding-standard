<?php

class Symfony2_Sniffs_Array_UseArrayShortTagSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * @return array
     */
    public function register()
    {
        return [T_ARRAY];
    }

    /**
     * Called when one of the token types is found.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The PHP_CodeSniffer file
     * @param int                  $stackPtr  token position in file
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $phpcsFile->addError('Array short tag [ ... ] must be used', $stackPtr);
    }
}
