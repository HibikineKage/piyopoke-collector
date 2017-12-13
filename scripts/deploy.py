from pathlib import Path
import shutil

deploy_files = [
	'application',
	'public',
	'vendor',
	'composer.json',
	'composer.lock',
	'LICENSE',
]

def log(text):
	print(text)

def initialize_deploy_directory(project):
	deploy = project / 'deploy'
	if deploy.exists():
		log("delete deploy directory")
		deploy.rmdir()
	log("create deploy directory")
	deploy.mkdir()

def copy_file(from_file, to_file):
	shutil.copy(str(from_file, str(to_file))
	
def copy_deploy_files(project, files):
	
	
if __name__ == '__main__':
	project = Path.cwd()
	initialize_deploy_directory(project)
	