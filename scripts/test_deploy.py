from unittest import TestCase
from pathlib import Path
from deploy import copy_file

class TestBuild(TestCase):
	def test_copy_file(self):
		test_file_dir = Path('.') / 'scripts' / 'test' / 'test_file'
		test_file_path = test_file_dir / 'test'
		copy_file_path = test_file_dir / 'test_copy'
		test_text = "Hello World!"
		
		if test_file_dir.exists():
			test_file_dir.rmdir()
		test_file_dir.mkdir()
		
		with test_file_path.open('w') as f:
			f.write(test_text)
		
		copy_file(test_file_path, copy_file_path)
		
		copy_file_text = copy_file_path.read_text()
		self.assertEqual(test_text, copy_file_text)
