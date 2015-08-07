# LPCS - Landing Page Conversion System

This documentation is for the LPCS (Landing Page Conversion System) Repository

----
NOTE: Any changes to the var.php, once approved and merged to the master repository must be applied to the LPCS snippets in Gist - and be re-saved in Sublime Text.

## Installation

1. Locate your local working directory (MAMP/htdocs/) and cd through iTerm.
2. Initialise the local working directory as a git repository (git init).
3. Clone the repository by using the remote repository URL (git clone).

## Customisation & Setup

Customisation & Setup TBA

## Usage

The LPCS is an exclusive landing page that utilises dynamic headline insertion through 'Google Adwords'. The page comes along with several additional pages, for additional benefits with Google's 'Quality Score'. The LPCS is currently set up and provided by Academy For Growth Ltd upon purchase.

## Contributing

1. Install as above.
2. Switch to the 'develop' branch and create branches from 'develop' to work on features/topics and hotfixes (or releases*) (git checkout -b yourbranchname develop).
3. Do your development work on the specific feature/topic/hotfix branch and do regular commits after editing files.
4. When you are ready to propose a merge, push your new branch (git push origin branchname) and then locate your branch on GitHub and activate a 'Pull Request'.
5. Once your pull request has been checked with a second-person approval, the merge can be accepted or further fixes can be proposed through the comment section of the "Pull Request" area.

NOTE:

The MASTER branch is where the source code always reflects a production-ready state.

The DEVELOP branch is the main branch where the source code always reflects a state with the latest delivered development changes for the next release. When the source code in the develop branch reaches a stable point and is ready to be released, all of the changes should be merged into a RELEASE branch (tagged with a release number) and then merged to the MASTER branch.

SUPPORTING branches for Features/Topics (General planned development work, or Issues labelled with: "enhancement", "help wanted", "needs adding", "question" etc) or Hotfixes (Issues labelled with: "bug", "wontfix", "duplicate" or "invalid") are merged into the DEVELOP branch once a PULL REQUEST has been made.

*RELEASE branches are only made once the DEVELOP branch (almost) reflects the desired state of the new release. At least all features that are targeted for the release-to-be-built must be merged in to develop at this point in time. All features targeted at future releases may not - they must wait until after the release branch is branched off. This is when the upcoming release will get assigned a version number (not any earlier). RELEASE branches support preparation of a new production release. They allow for last-minute dotting of i's and crossing t's. Furthermore, they allow for minor bug fixes and preparing meta-data for a release (version numbers, build dates, etc.). By doing all of this work on a release branch, the DEVELOP branch is cleared to receive features for the next big release. RELEASE branches, when finishing a release branch, the RELEASE branch must be merged into the MASTER branch.

## Credits

Credits TBA

## License

License TBA
