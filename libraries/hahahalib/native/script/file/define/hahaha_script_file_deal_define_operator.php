<?php

/*
// --------------------------------------------------------------------------
注意
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
*/

/*
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
*/

/*

*/

/*

{{-- 原始 : hahaha --}}
{{-- 維護 :  --}}
{{-- 指揮 :  --}}
{{-- ---------------------------------------------------------------------------------------------- --}}
{{-- 決定 : name --}}
{{-- 
    ----------------------------------------------------------------------------
    說明 : 
    ----------------------------------------------------------------------------   
    
    ----------------------------------------------------------------------------
--}}
{{-- ---------------------------------------------------------------------------------------------- --}}
*/

namespace hahahalib\script;


/*
因為是file deal的define，所以在後面加define
*/
class hahaha_file_deal_define_operator
{
	// -------------------------------------------------- 
	const MKDIR = "mkdir"; 
	const RMDIR = "rmdir"; 
	const COPY = "copy"; 
	const MOVE = "move"; 
	const DELETE = "delete"; 
	const CHMOD = "chmod"; 
	const GLOB = "glob"; 
	const TOUCH = "touch"; 
	const RENAME = "rename"; 
	// -------------------------------------------------- 
	const READ_FILE = "read_file"; 
	const WRITE_FILE = "write_file"; 
	// -------------------------------------------------- 
	const RECURSIVE_COPY = "recursive_copy"; 
	const DELETE_TREE = "delete_tree"; 
	// -------------------------------------------------- 
	// 因為file system為非同步，在採取下一步前可以等某些判斷成功
	const WAIT_FILE_EXIST = "wait_file_exist"; 
	const WAIT_DIR_EXIST = "wait_dir_exist"; 
	const WAIT_FILE_NOT_EXIST = "wait_file_not_exist"; 
	const WAIT_DIR_NOT_EXIST = "wait_dir_not_exist"; 
	// -------------------------------------------------- 
	
}