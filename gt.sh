
i=1
for commitMessage in "$@"
do
    git commit $commitMessage -m "Adding $commitMessage";
    i=$((i+1));
done
